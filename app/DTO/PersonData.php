<?php

namespace App\DTO;

final readonly class PersonData
{
    public function __construct(
        public ?string $name = null,
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $profession = null,
        public ?string $area = null,
        public ?string $product = null,
        public ?string $address = null,
    )
    {
    }
}
