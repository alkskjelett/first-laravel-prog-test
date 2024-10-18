<?php

namespace App\Services;

use App\DTO\PersonData;

class ScenarioProductSpecial extends AbstractScenario
{
    protected const SCENARIO_EMAIL = 'special@example.com';
    private const SCENARIO_PRODUCT = 'special';

    public function checkScenario(PersonData $personData): bool
    {
        return $personData->product === self::SCENARIO_PRODUCT;
    }

    public function getScenarioEmail(): string
    {
        return self::SCENARIO_EMAIL;
    }
}
