<?php

namespace App\Services;

use App\DTO\PersonData;

readonly class PersonService
{
    public function __construct(
        private array $scenarios,
    )
    {
    }

    public function processForm(PersonData $personData): void
    {
        $this->executeScenario($personData);
    }

    private function executeScenario(PersonData $personData): void
    {
        foreach ($this->scenarios as $scenario) {
            if ($scenario->checkScenario($personData)) {;
                $scenario->execute($personData);
            }
        }
    }
}
