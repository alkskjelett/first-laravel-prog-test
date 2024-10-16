<?php

namespace App\DTO;

final readonly class MailMessage
{
    public function __construct(
        public string $content,
        public string $to,
    ) {}
}
