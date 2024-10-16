<?php

namespace App\Http\Controllers;

use App\DTO\MailMessage;
use App\Mail\MailSendService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Queue\Queue;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function __construct(
    )
    {
    }

    public function processForm(): Response
    {
        $message = (new MailSendService(new MailMessage('Сосал?', 'alkskjelett@gmail.com')));
        Mail::mailer('smtp')->send($message);

        return new Response('123');
    }
}
