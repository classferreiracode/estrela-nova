<?php

namespace App\Models;

use App\Models\Concerns\ResolvesMediaUrls;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use ResolvesMediaUrls;

    protected $fillable = [
        'tag', 'icon', 'title', 'description',
        'image', 'content', 'is_active', 'order',
    ];

    protected $appends = ['image_url'];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
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
