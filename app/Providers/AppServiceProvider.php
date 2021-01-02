<?php

namespace App\Providers;

use App\Models\User;
use Calebporzio\Onboard\OnboardFacade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        OnboardFacade::addStep('To Complete your registration, kindly complete your profile')
            ->link('/profile')
            ->cta('Complete')
            ->completeIf(function (User $user) {
                return count($user->all()) < 1;
            });
    }
}
