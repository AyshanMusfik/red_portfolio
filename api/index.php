<?php

// Ensure all /tmp writable directories exist on Vercel Lambda
$dirs = [
    '/tmp/storage',
    '/tmp/storage/framework',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app',
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
    '/tmp/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

putenv('VERCEL=1');
putenv('APP_ENV=production');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('APP_SERVICES_CACHE=/tmp/cache/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/cache/packages.php');
putenv('APP_CONFIG_CACHE=/tmp/cache/config.php');
putenv('APP_ROUTES_CACHE=/tmp/cache/routes.php');
putenv('APP_EVENTS_CACHE=/tmp/cache/events.php');
putenv('SESSION_DRIVER=file');
putenv('CACHE_STORE=file');
putenv('LOG_CHANNEL=stderr');

$_ENV['VERCEL'] = '1';
$_ENV['APP_ENV'] = 'production';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['SESSION_DRIVER'] = 'file';
$_ENV['CACHE_STORE'] = 'file';
$_ENV['LOG_CHANNEL'] = 'stderr';

if (empty($_ENV['APP_KEY'])) {
    $_ENV['APP_KEY'] = 'base64:f0w5Kk7q0tByTXQyKWyqN7cQXr5j/s1ry2WlnE1/EM8=';
    putenv('APP_KEY=base64:f0w5Kk7q0tByTXQyKWyqN7cQXr5j/s1ry2WlnE1/EM8=');
}

// Forward Vercel Serverless request to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
