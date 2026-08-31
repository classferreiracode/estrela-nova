<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TimelineEvent;

class TimelineEventController extends Controller
{
    public function index()
    {
        return TimelineEvent::orderBy('order')
            ->orderBy('year')
            ->get();
    }
}
