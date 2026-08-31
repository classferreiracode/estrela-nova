<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaAsset extends Model
{
    protected $fillable = ['name', 'file', 'alt_text', 'mime_type'];

    protected $appends = ['url'];

    public function getUrlAttribute(): string
    {
        return url('storage/'.$this->file);
    }
}
