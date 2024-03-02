<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {   //dynamic gate define 
        Gate::before(function (User $user, $ability) {
            Gate::define($ability, function (User $user) use ($ability) {
                return hasPermission($ability);
            });
      });
    }
}
