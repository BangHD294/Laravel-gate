"# Laravel-gate" 

b1. composer require laravel/ui:^2.4
b2. php artisan ui vue --auth
b3. app->providers->authserviceProvider.php
b4.  public function boot()
    {
        $this->registerPolicies();
        Gate::define('is-admin', function ($user){
            return $user->is_admin; // admin = true, user = false
        });

        //
    }
