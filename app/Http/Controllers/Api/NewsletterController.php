<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(['email' => ['required', 'email:rfc', 'max:255']]);
        $subscription = NewsletterSubscription::updateOrCreate(
            ['email' => $validated['email']],
            ['is_active' => true],
        );

        return response()->json(['message' => 'Inscrição realizada.', 'subscription' => $subscription], 201);
    }
}
