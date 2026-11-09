<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'min:2', 'max:100'],
            'email'   => ['required', 'email:rfc,dns', 'max:150'],
            'subject' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ], [
            'name.required'    => 'Please tell us your name.',
            'name.min'         => 'Your name looks too short.',
            'email.required'   => 'We need an email to reply to.',
            'email.email'      => 'That email address doesn\'t look right.',
            'message.required' => 'Please describe what you need.',
            'message.min'      => 'Please give us a bit more detail (at least 10 characters).',
        ]);

        $contactMessage = ContactMessage::create([
            ...$validated,
            'ip_address' => $request->ip(),
        ]);

        return back()->with(
            'success',
            "Thanks, {$contactMessage->name}! Your message is in. We'll get back to you within 24 hours."
        );
    }
}