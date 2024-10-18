<?php

namespace App\Services;

use App\DTO\MailMessage;
use App\DTO\PersonData;
use App\Mail\MailSendService;
use Illuminate\Support\Facades\Mail;

readonly class SenderService
{
    public function send(PersonData $personData, string $to): void
    {
        $message = (new MailSendService(new MailMessage($personData, $to)));
        Mail::mailer('smtp')->send($message);
    }
}
