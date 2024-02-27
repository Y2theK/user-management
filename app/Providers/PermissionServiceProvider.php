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
        Blade::directive('can', function (string $permission) {
            return "<?php if (hasPermission($permission)): ?>";
        });
        Blade::directive('endcan', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('canany', function (string|array $permissions) {
            return "<?php if (hasAnyPermission($permissions)): ?>";
        });
        Blade::directive('endcanany', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('hasrole', function (string $role) {
            return "<?php if (hasRole($role)): ?>";
        });
        Blade::directive('endhasrole', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('hasanyrole', function (string|array $roles) {
            return "<?php if (hasAnyRole($roles)): ?>";
        });
        Blade::directive('endhasanyrole', function () {
            return "<?php endif; ?>";
        });
    }
}
