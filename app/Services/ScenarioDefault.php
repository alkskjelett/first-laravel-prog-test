<?php

namespace App\Services;

use App\DTO\PersonData;

class ScenarioDefault extends AbstractScenario
{
    protected const SCENARIO_EMAIL = 'all@example.com';

    public function checkScenario(PersonData $personData): bool
    {
        return true;
    }

    public function getScenarioEmail(): string
    {
        return self::SCENARIO_EMAIL;
    }
}
