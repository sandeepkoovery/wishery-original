<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\ContactUsFormRequest;
use App\Mail\ContactFormMail;
use App\Mail\ContactUsFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();
        $recipient = env('ADMIN_EMAIL', 'iuhaawishery@gmail.com');

        try {
            Mail::to($recipient)->send(new ContactFormMail($data));

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you — your message has been sent.'
            ]);
        } catch (\Exception $e) {
            \Log::error($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to send email. Please try again later.'
            ], 500);
        }
    }
    public function contactusSubmit(ContactUsFormRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();
        $recipient = env('ADMIN_EMAIL', 'iuhaawishery@gmail.com');

        try {
            Mail::to($recipient)->send(new ContactUsFormMail($data));

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you — your message has been sent.'
            ]);
        } catch (\Exception $e) {
            \Log::error($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to send email. Please try again later.'
            ], 500);
        }
    }
}
