<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;

class SponsorController extends Controller
{
    public function index()
    {
        return Sponsor::where('is_active', true)
            ->orderBy('order')
            ->get();
    }
}
