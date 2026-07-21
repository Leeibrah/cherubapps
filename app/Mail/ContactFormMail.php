<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function build(): static
    {
        return $this
            ->subject('New Enquiry: ' . $this->data['name'])
            ->replyTo($this->data['email'], $this->data['name'])
            ->view('emails.contact');
    }
}
