<?php

namespace App\Models;

use App\Models\Concerns\ResolvesMediaUrls;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use ResolvesMediaUrls;

    protected $fillable = ['name', 'image', 'url', 'is_active', 'order'];

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
