<?php

namespace App\Services;

use App\DTO\PersonData;

class ScenarioEmail extends AbstractScenario
{
    public function __construct(
        SenderService $senderService,
        protected ?string $scenarioEmail = null,
    )
    {
        parent::__construct($senderService);
    }

    public function checkScenario(PersonData $personData): bool
    {
        if ($personData->email !== null) {
            $this->scenarioEmail = $personData->email;
            return true;
        }
        return false;
    }

    public function getScenarioEmail(): string
    {
        return $this->scenarioEmail;
    }
}
