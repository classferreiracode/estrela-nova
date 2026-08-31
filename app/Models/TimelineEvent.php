<?php

namespace App\Models;

use App\Models\Concerns\ResolvesMediaUrls;
use Illuminate\Database\Eloquent\Model;

class TimelineEvent extends Model
{
    use ResolvesMediaUrls;

    protected $fillable = ['year', 'image', 'text', 'order'];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute(): ?string
    {
        if (! $this->image) {
            return null;
        }

        return $this->mediaUrl($this->image);
    }
}
