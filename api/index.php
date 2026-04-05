<?php

// Buat folder yang dibutuhkan Laravel di /tmp (karena Vercel read-only)
$storageFolders = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache',
];

foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }
}

// Panggil index Laravel yang asli
require __DIR__ . '/../public/index.php';