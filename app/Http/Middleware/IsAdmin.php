<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est connecté et si son rôle est 'admin'
        if (auth()->user() && auth()->user()->role !== 'admin') {
            return redirect('/');  // Redirige si l'utilisateur n'est pas admin
        }

        return $next($request);
    }
}
