<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\repo\interfaces\team as teaminterfaace;
use App\repo\classes\team as teamclass;
use App\repo\classes\matches as matchesclasses;
use App\repo\interfaces\player as playerinterfaace;
use App\repo\classes\player as playerclass;
use App\repo\classes\special as  specialclass;
use App\repo\interfaces\special as specialinterface;
use App\repo\interfaces\matches as matchesinterface;

class repo extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(teaminterfaace::class,teamclass::class);
        $this->app->bind(playerinterfaace::class,playerclass::class);
        $this->app->bind(matchesinterface::class,matchesclasses::class);
        $this->app->bind(specialinterface::class,specialclass::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
