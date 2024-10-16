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
        private MailMessage $mailMessage,
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
                'content' => $this->mailMessage->content,
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
