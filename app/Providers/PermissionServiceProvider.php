<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('can', function ($permission) {
            return "<?php if (hasPermission($permission)): ?>";
        });
        Blade::directive('endcan', function () {
            return "<?php endif; ?>";
        });
    }
}
