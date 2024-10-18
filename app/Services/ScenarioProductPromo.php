<?php

namespace App\Services;

use App\DTO\PersonData;
use App\Services\Interfaces\ScenarioInterface;

class ScenarioProductPromo extends AbstractScenario
{
    protected const SCENARIO_EMAIL = 'promo@example.com';
    private const SCENARIO_PRODUCT = 'promo';

    public function checkScenario(PersonData $personData): bool
    {
        return $personData->name !== null &&
            $personData->email !== null &&
            $personData->phone !== null &&
            $personData->product === self::SCENARIO_PRODUCT
        ;
    }

    public function getScenarioEmail(): string
    {
        return self::SCENARIO_EMAIL;
    }
}
