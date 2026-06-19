<?php

// Vercel serverless environment is read-only except for /tmp.
// We dynamically create storage/compiled directories in /tmp to prevent Laravel write crashes.
$storagePaths = [
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/bootstrap/cache',
];

foreach ($storagePaths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// Override Laravel environment storage/compiled paths to point to /tmp
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('CACHE_DIRECTORY=/tmp/storage/framework/cache');

// Boot Laravel via the normal public entry point
require __DIR__ . '/../public/index.php';
