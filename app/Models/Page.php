<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'template', 'hero_title', 'hero_subtitle', 'hero_image', 'content', 'seo_title', 'seo_description', 'is_published', 'published_at', 'order'];

    protected $appends = ['hero_image_url'];

    protected function casts(): array
    {
        return ['is_published' => 'boolean', 'published_at' => 'datetime'];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)
            ->where(fn (Builder $q) => $q->whereNull('published_at')->orWhere('published_at', '<=', now()));
    }

    public function getHeroImageUrlAttribute(): ?string
    {
        return $this->hero_image ? url('storage/'.$this->hero_image) : null;
    }
}
