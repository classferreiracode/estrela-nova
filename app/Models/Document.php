<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['title', 'subtitle', 'icon', 'file_url', 'is_active', 'order'];

    protected $appends = ['download_url'];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function getDownloadUrlAttribute(): ?string
    {
        if (! $this->file_url) {
            return null;
        }
        if (str_starts_with($this->file_url, 'http')) {
            return $this->file_url;
        }

        return url('storage/'.$this->file_url);
    }
}
