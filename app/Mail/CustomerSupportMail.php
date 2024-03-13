<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerSupportMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $sender;
    public $content;

    public function __construct($name, $sender, $content)
    {
        $this->name = $name;
        $this->sender = $sender;
        $this->content = $content;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Customer Support',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.customer-support',
            with: [
                'name' => $this->name,
                'sender' => $this->sender,
                'message' => $this->content
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
