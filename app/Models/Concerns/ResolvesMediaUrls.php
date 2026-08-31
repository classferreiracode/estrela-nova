<?php

namespace App\Models\Concerns;

trait ResolvesMediaUrls
{
    protected function mediaUrl(?string $path): ?string
    {
        if (! $path) {
            return null;
        }
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }
        if (str_starts_with($path, '/')) {
            return url(ltrim($path, '/'));
        }
        if (! str_contains($path, '/')) {
            return url('content/'.$path);
        }

        return url('storage/'.$path);
    }
}
