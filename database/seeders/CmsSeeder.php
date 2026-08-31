<?php

namespace Database\Seeders;

use App\Models\Cta;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Seeder;

class CmsSeeder extends Seeder
{
    public function run(): void
    {
        Menu::updateOrCreate(['location' => 'header'], ['name' => 'Menu principal', 'is_active' => true, 'items' => $this->mainItems()]);
        Menu::updateOrCreate(['location' => 'footer'], ['name' => 'Links do rodapé', 'is_active' => true, 'items' => $this->mainItems(true)]);
        Cta::updateOrCreate(['name' => 'WhatsApp flutuante'], [
            'label' => 'Fale conosco pelo WhatsApp',
            'url' => 'https://wa.me/551158420333?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es.',
            'location' => 'floating', 'style' => 'whatsapp', 'open_in_new_tab' => true, 'is_active' => true,
        ]);
        Page::updateOrCreate(['slug' => 'politica-de-privacidade'], [
            'title' => 'Política de Privacidade', 'hero_title' => 'Política de Privacidade',
            'content' => '<p>Este conteúdo pode ser atualizado pela equipe no painel administrativo.</p>',
            'seo_description' => 'Política de privacidade do Movimento Comunitário Estrela Nova.', 'is_published' => true,
        ]);
        Page::updateOrCreate(['slug' => 'termos-de-uso'], [
            'title' => 'Termos de Uso', 'hero_title' => 'Termos de Uso',
            'content' => '<p>Este conteúdo pode ser atualizado pela equipe no painel administrativo.</p>',
            'seo_description' => 'Termos de uso do site do Movimento Comunitário Estrela Nova.', 'is_published' => true,
        ]);
    }

    private function mainItems(bool $includeHome = false): array
    {
        $items = [
            ['label' => 'Sobre', 'url' => '/sobre', 'new_tab' => false],
            ['label' => 'Atuação', 'url' => '/atuacao', 'new_tab' => false],
            ['label' => 'Como apoiar', 'url' => '/como-apoiar', 'new_tab' => false],
            ['label' => 'Blog', 'url' => '/blog', 'new_tab' => false],
            ['label' => 'Contato', 'url' => '/contato', 'new_tab' => false],
        ];

        if ($includeHome) {
            array_unshift($items, ['label' => 'Início', 'url' => '/', 'new_tab' => false]);
        }

        return $items;
    }
}
