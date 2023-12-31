<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('isAdmin', function(User $user){
            return $user->roles_id == 1;
        });

        Gate::define('isMahasiswa', function(User $user){
            return $user->roles_id == 2;
        });

        Gate::define('isUser', function(User $user){
            return $user->roles_id == 3;
        });
    }
}
