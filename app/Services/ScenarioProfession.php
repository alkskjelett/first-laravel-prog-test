<?php

namespace App\Services;

use App\DTO\PersonData;

class ScenarioProfession extends AbstractScenario
{
    protected const SCENARIO_EMAIL = 'center@example.com';
    private const STUDENT_PROFESSION = 'студент';

    public function checkScenario(PersonData $personData): bool
    {
        return $personData->name !== null &&
            $personData->email !== null &&
            $personData->phone !== null &&
            $personData->area !== null &&
            $personData->product !== null &&
            $personData->profession === self::STUDENT_PROFESSION
        ;
    }

    public function getScenarioEmail(): string
    {
        return self::SCENARIO_EMAIL;
    }
}
