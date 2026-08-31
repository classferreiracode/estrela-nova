<?php

namespace Tests\Feature;

use App\Models\Cta;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CmsContentTest extends TestCase
{
    use RefreshDatabase;

    public function test_published_page_is_public_and_draft_is_hidden(): void
    {
        Page::create(['title' => 'Publicada', 'slug' => 'publicada', 'content' => '<p>Conteúdo</p>', 'is_published' => true]);
        Page::create(['title' => 'Rascunho', 'slug' => 'rascunho', 'is_published' => false]);

        $this->getJson('/api/pages/publicada')->assertOk()->assertJsonPath('title', 'Publicada');
        $this->getJson('/api/pages/rascunho')->assertNotFound();
    }

    public function test_active_menu_and_visible_cta_are_exposed(): void
    {
        Menu::create(['name' => 'Principal', 'location' => 'header', 'items' => [['label' => 'Sobre', 'url' => '/sobre']], 'is_active' => true]);
        Cta::create(['name' => 'Doar', 'label' => 'Doe agora', 'url' => '/como-apoiar', 'location' => 'content', 'is_active' => true]);
        Cta::create(['name' => 'Expirada', 'label' => 'Antiga', 'url' => '/', 'ends_at' => now()->subMinute(), 'is_active' => true]);

        $this->getJson('/api/menus/header')->assertOk()->assertJsonPath('items.0.label', 'Sobre');
        $this->getJson('/api/ctas')->assertOk()->assertJsonCount(1)->assertJsonPath('0.label', 'Doe agora');
    }

    public function test_contact_submission_is_validated_and_saved(): void
    {
        $this->postJson('/api/contacts', [])->assertUnprocessable()->assertJsonValidationErrors(['name', 'email', 'message']);
        $this->postJson('/api/contacts', [
            'name' => 'Pessoa', 'email' => 'pessoa@example.com', 'subject' => 'Contato', 'message' => 'Olá',
        ])->assertCreated();
        $this->assertDatabaseHas('contacts', ['email' => 'pessoa@example.com']);
    }

    public function test_admin_login_is_available(): void
    {
        $this->get('/admin/login')->assertOk();
    }

    public function test_newsletter_subscription_is_idempotent(): void
    {
        $this->postJson('/api/newsletter', ['email' => 'news@example.com'])->assertCreated();
        $this->postJson('/api/newsletter', ['email' => 'news@example.com'])->assertCreated();
        $this->assertDatabaseCount('newsletter_subscriptions', 1);
    }
}
