<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['title', 'subtitle', 'icon', 'file_url', 'is_active', 'order'];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
