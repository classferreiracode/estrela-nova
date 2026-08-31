<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class MenuController extends Controller
{
    public function show(string $location)
    {
        return Menu::where('location', $location)->where('is_active', true)->firstOrFail();
    }
}
