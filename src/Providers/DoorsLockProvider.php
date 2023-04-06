<?php

namespace Sakib78610\Doorspin\Providers;

use Illuminate\Support\ServiceProvider;

class DoorsLockProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'doorspin');
    }
}


