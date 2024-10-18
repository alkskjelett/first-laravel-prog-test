<?php

namespace App\DTO;

final readonly class MailMessage
{
    public function __construct(
        public PersonData $personData,
        public string $to,
    ) {}
}
