<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('define-access--admin', function (User $user) {
            $roleAccess = [1];
            return in_array($user->user_type_id, $roleAccess);
        });
        Gate::define('define-access--company-admin', function (User $user) {
            $roleAccess = [5, 1];
            return in_array($user->user_type_id, $roleAccess);
        });
        Gate::define('define-access-beneficiary', function (User $user) {
            $roleAccess = [3];
            return in_array($user->user_type_id, $roleAccess);
        });
    }
}
