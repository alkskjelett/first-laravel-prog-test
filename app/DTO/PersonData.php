<?php

namespace App\DTO;

final readonly class PersonData
{
    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public string $profession,
        public string $area,
        public string $product
    )
    {
    }
}
