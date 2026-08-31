<?php

namespace App\Models;

use App\Models\Concerns\ResolvesMediaUrls;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use ResolvesMediaUrls;

    protected $fillable = [
        'slug', 'title', 'category', 'date', 'excerpt',
        'image', 'image_alt', 'content', 'is_published', 'order',
    ];

    protected $appends = ['image_url'];

    protected function casts(): array
    {
        return [
            'content' => 'array',
            'is_published' => 'boolean',
        ];
    }

    public function getImageUrlAttribute(): ?string
    {
        if (! $this->image) {
            return null;
        }

        return $this->mediaUrl($this->image);
    }
}
