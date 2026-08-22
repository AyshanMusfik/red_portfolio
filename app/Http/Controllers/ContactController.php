<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'required|email|max:150',
            'message' => 'required|string|max:2000',
            'agreement' => 'accepted',
        ], [
            'first_name.required' => 'First name is required.',
            'email.required' => 'Please provide a valid email address.',
            'email.email' => 'Please provide a valid email address.',
            'message.required' => 'Please type your message.',
            'agreement.accepted' => 'Please accept the permission checkbox.',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your message has been sent successfully.',
        ]);
    }
}
