<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Guard against empty strings in cloud environment variables (e.g., Vercel)
$defaults = [
    'SESSION_DRIVER' => 'file',
    'CACHE_STORE' => 'file',
    'LOG_CHANNEL' => 'stderr',
    'FILESYSTEM_DISK' => 'local',
    'QUEUE_CONNECTION' => 'sync',
    'BROADCAST_CONNECTION' => 'log',
    'APP_MAINTENANCE_DRIVER' => 'file',
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'false',
];

foreach ($defaults as $key => $val) {
    if (!isset($_ENV[$key]) || $_ENV[$key] === '' || $_ENV[$key] === null) {
        $_ENV[$key] = $val;
        $_SERVER[$key] = $val;
        putenv("$key=$val");
    }
}

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

// Configure storage path for Vercel Serverless read-only environment
if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL']) || getenv('VERCEL')) {
    $app->useStoragePath('/tmp/storage');
}

return $app;
