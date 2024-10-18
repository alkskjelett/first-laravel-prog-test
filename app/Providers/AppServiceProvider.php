<?php

namespace App\Providers;

use App\Services\PersonService;
use App\Services\ScenarioArea;
use App\Services\ScenarioDefault;
use App\Services\ScenarioEmail;
use App\Services\ScenarioProductPromo;
use App\Services\ScenarioProductSpecial;
use App\Services\ScenarioProfession;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PersonService::class, fn (Application $app) =>
            new PersonService([
                $app->get(ScenarioArea::class),
                $app->get(ScenarioProfession::class),
                $app->get(ScenarioProductPromo::class),
                $app->get(ScenarioEmail::class),
                $app->get(ScenarioProductSpecial::class),
                $app->get(ScenarioDefault::class),
            ])
        );
    }
}
