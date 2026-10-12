<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\ContactUsFormRequest;
use App\Mail\ContactFormMail;
use App\Mail\ContactUsFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();
        $recipient = config('mail.admin_address', env('ADMIN_EMAIL', 'iuhaawishery@gmail.com'));

        try {
            Mail::to($recipient)->send(new ContactFormMail($data));

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you — your message has been sent.'
            ]);
        } catch (\Throwable $e) {
            Log::error('Contact form email failed: ' . $e->getMessage(), [
                'exception' => get_class($e),
                'trace' => $e->getTraceAsString(),
                'payload' => $data,
            ]);

            return response()->json([
                'status' => 'error',
                'message' => config('app.debug')
                    ? 'Failed to send email: ' . $e->getMessage()
                    : 'Failed to send email. Please try again later.',
                'error_detail' => config('app.debug') ? $e->getMessage() : null,
            ], 500);
        }
    }

    public function contactusSubmit(ContactUsFormRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();
        $recipient = config('mail.admin_address', env('ADMIN_EMAIL', 'iuhaawishery@gmail.com'));

        try {
            Mail::to($recipient)->send(new ContactUsFormMail($data));

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you — your message has been sent.'
            ]);
        } catch (\Throwable $e) {
            Log::error('Contact Us email failed: ' . $e->getMessage(), [
                'exception' => get_class($e),
                'trace' => $e->getTraceAsString(),
                'payload' => $data,
            ]);

            return response()->json([
                'status' => 'error',
                'message' => config('app.debug')
                    ? 'Failed to send email: ' . $e->getMessage()
                    : 'Failed to send email. Please try again later.',
                'error_detail' => config('app.debug') ? $e->getMessage() : null,
            ], 500);
        }
    }
}
