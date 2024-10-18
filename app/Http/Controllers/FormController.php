<?php

namespace App\Http\Controllers;

use App\DTO\MailMessage;
use App\DTO\PersonData;
use App\Mail\MailSendService;
use App\Services\PersonService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function __construct(
        private readonly PersonService $personService,
    )
    {
    }

    public function processForm(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);
        $this->personService->processForm(new PersonData(...$data));

        return new Response('ok');
    }
}
