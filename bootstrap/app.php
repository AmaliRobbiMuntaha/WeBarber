<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'role' => \App\Http\Middleware\RoleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
    $exceptions->render(function (\Throwable $e, Request $request) {
        error_log(
            "ORIGINAL LARAVEL ERROR: " .
            get_class($e) . " - " .
            $e->getMessage() . "\n" .
            $e->getTraceAsString()
        );

        return response('Internal Server Error', 500);
    });
})->create();
