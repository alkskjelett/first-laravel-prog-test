<?php

namespace App\Services;

use App\DTO\PersonData;

class ScenarioArea extends AbstractScenario
{
//    protected const SCENARIO_EMAIL = 'center@example.com';
    protected const SCENARIO_EMAIL = 'alkskjelett@gmail.com';
    private const AREAS = [
        'Санкт-Петербург',
        'Москва',
    ];

    public function checkScenario(PersonData $personData): bool
    {
        return $personData->name !== null &&
            $personData->email !== null &&
            $personData->phone !== null &&
            $personData->profession !== null &&
            $personData->product !== null &&
            in_array($personData->area, self::AREAS, true)
        ;
    }

    public function getScenarioEmail(): string
    {
        return self::SCENARIO_EMAIL;
    }
}
