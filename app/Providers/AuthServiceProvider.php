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
        Gate::define('access-admin', function (User $user) {
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
            return in_array(1, $roleAccess); // role_id para "Visualizar Usuários" é 1
        });

        Gate::define('create-users', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(2, $roleAccess); 
        });

        Gate::define('edit-users', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(3, $roleAccess); 
        });

        Gate::define('edit-roles', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(16, $roleAccess); 
        });
        Gate::define('view-organizations', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(17, $roleAccess); // role_id para "Visualizar Usuários" é 1
        });

        Gate::define('create-organizations', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(18, $roleAccess); 
        });

        Gate::define('edit-organizations', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(19, $roleAccess); 
        });

        Gate::define('view-crt', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(4, $roleAccess);
        });

        Gate::define('create-crt', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(5, $roleAccess);
        });
        Gate::define('edit-crt', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(6, $roleAccess); 
        });

        Gate::define('view-dueDiligences', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(7, $roleAccess); 
        });

        Gate::define('create-dueDiligences', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(8, $roleAccess); 
        });
        Gate::define('aprove-dueDiligences', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(9, $roleAccess);
        });

        Gate::define('view-assets', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(10, $roleAccess); 
        });

        Gate::define('cancel-asset', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(11, $roleAccess); 
        });
        Gate::define('view-offers-made', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(12, $roleAccess); 
        });
        Gate::define('view-offers-received', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(13, $roleAccess); 
        });

        Gate::define('make-offer', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(14, $roleAccess); 
        });

        Gate::define('accept-offer', function (User $user) {
            $roleAccess = $user->roles->pluck('id')->toArray();
            return in_array(15, $roleAccess); 
        });

        


    }
}
