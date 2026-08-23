<?php

// Ensure writable directories exist in Vercel Serverless /tmp
$dirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions'
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Forward Vercel Serverless request to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
