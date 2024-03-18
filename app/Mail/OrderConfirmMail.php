<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderConfirmMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private mixed $products;
    private mixed $address;

    public function __construct($name, $products, $address)
    {
        $this->name = $name;
        $this->products = $products;
        $this->address = $address;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order Confirm',

        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.order-confirm',
            with: [
                'user_name' => $this->name,
                'products' => $this->products,
                'address' => $this->address,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
