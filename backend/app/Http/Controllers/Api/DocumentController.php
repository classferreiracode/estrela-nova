<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        return Document::where('is_active', true)
            ->orderBy('order')
            ->get();
    }
}
