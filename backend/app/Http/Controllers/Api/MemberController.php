<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MemberGroup;

class MemberController extends Controller
{
    public function index()
    {
        return MemberGroup::with('members')
            ->orderBy('order')
            ->get();
    }
}
