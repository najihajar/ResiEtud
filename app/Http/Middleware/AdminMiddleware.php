<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifiez si l'utilisateur est authentifié et a le rôle 'admin'
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Redirigez l'utilisateur vers la page de connexion s'il n'est pas admin
        return redirect()->route('login')->with('error', 'Vous n\'avez pas accès à cette page.');
    }
}