<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Honeypot: bots fill hidden fields; humans leave them empty.
        if (filled($request->input('website')) || filled($request->input('company'))) {
            return back()->with('success', 'Mensagem enviada com sucesso!');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Mail::to(config('mail.contact_email', 'irving.sbandeira@gmail.com'))
            ->send(new ContactMessage(
                senderName: $validated['name'],
                senderEmail: $validated['email'],
                senderMessage: $validated['message'],
            ));

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
