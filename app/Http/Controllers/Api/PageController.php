<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        return Page::published()->orderBy('order')->get(['id', 'title', 'slug', 'seo_title', 'seo_description']);
    }

    public function show(string $slug)
    {
        return Page::published()->where('slug', $slug)->firstOrFail();
    }
}
