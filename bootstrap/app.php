<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\AdminMiddleware; // Importez le middleware

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

        // Enregistrer le middleware avec un alias
        $middleware->alias([
            'admin' => AdminMiddleware::class, // Alias 'admin' pour AdminMiddleware
        ]);
    })
    ->create();

// Liaison manquante pour le gestionnaire d'exceptions
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;