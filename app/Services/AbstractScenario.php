<?php

namespace App\Services;

use App\DTO\PersonData;

abstract class AbstractScenario
{
    public function __construct(
        protected SenderService $senderService,
    )
    {
    }

    public function execute(PersonData $personData): void
    {
        var_dump($this->getScenarioEmail());
        if ($this->getScenarioEmail() !== null) {
            $this->senderService->send($personData, $this->getScenarioEmail());
        }
    }

    public abstract function checkScenario(PersonData $personData): bool;

    public abstract function getScenarioEmail(): string;
}
