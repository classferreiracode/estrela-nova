<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;

class SiteSettingController extends Controller
{
    public function index()
    {
        return SiteSetting::pluck('value', 'key');
    }
}
