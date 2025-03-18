<?php
// use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\AuthServiceProvider;

// class AppServiceProvider extends AuthServiceProvider{
// public function boot()
// {
//     $this->registerPolicies();

//     Gate::define('is-admin', function ($user) {
//         return $user->role === 'admin';
//     });
// }
// }
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    // ...
}
