<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cta;

class CtaController extends Controller
{
    public function index()
    {
        return Cta::visible()->orderBy('order')->get();
    }
}
