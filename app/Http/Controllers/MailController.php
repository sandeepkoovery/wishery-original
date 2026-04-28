<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminNotification;
use App\Mail\UserAcknowledgment;

class MailController extends Controller
{
    public function sendHomeMail(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(env('ADMIN_EMAIL'))->send(new AdminNotification($validated));
        Mail::to($validated['email'])->send(new UserAcknowledgment($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function sendContactMail(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(env('ADMIN_EMAIL'))->send(new AdminNotification($validated));
        Mail::to($validated['email'])->send(new UserAcknowledgment($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
