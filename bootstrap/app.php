<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\AdminMiddleware; 

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php'
    )
    ->withMiddleware(function ($middleware) {
        // Middlewares globaux (ajoutés sans supprimer les existants)
        $middleware->append([
            \Illuminate\Cookie\Middleware\EncryptCookies::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
        ]);

        // Enregistrer les middlewares spécifiques à la route avec un alias
        $middleware->alias([
            'auth' => \App\Http\Middleware\Authenticate::class,
            'admin' => \App\Http\Middleware\AdminMiddleware::class, // middleware admin que tu as défini
        ]);
    })
    ->create();

// Enregistrer le gestionnaire d'exceptions
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;
