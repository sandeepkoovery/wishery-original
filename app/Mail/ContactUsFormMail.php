<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // public so the view can access it

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission')
                    ->markdown('emails.contactus')
                    ->with(['data' => $this->data]);
    }
}
