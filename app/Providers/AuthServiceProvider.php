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
            $userType = [1];
            return in_array($user->user_type_id, $userType);
        });
        Gate::define('define-access--company-admin', function (User $user) {
            $userType = [5, 1];
            return in_array($user->user_type_id, $userType);
        });
        Gate::define('define-access-beneficiary', function (User $user) {
            $userType = [3];
            return in_array($user->user_type_id, $userType);
        });

        Gate::define('view-users', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(2, $roleAccess); // Assumindo que o role_id para "Visualizar Usuários" é 2
        });

        Gate::define('edit-users', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(2, $roleAccess); // Assumindo que o role_id para "Visualizar Usuários" é 2
        });
    }
}
