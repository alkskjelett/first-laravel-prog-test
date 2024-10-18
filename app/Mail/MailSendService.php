<?php

namespace App\Mail;

use App\DTO\MailMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailSendService extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(
        private readonly MailMessage $mailMessage,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            to: $this->mailMessage->to,
            subject: 'Mail Service',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail_message',
            with: [
                'name' => $this->mailMessage->personData->name,
                'email' => $this->mailMessage->personData->email,
                'phone' => $this->mailMessage->personData->phone,
                'profession' => $this->mailMessage->personData->profession,
                'area' => $this->mailMessage->personData->area,
                'product' => $this->mailMessage->personData->product,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
