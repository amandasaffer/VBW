<?php

// Get the environment setting from the .env file 🎉
// Note: You also do this in config/general.php, but it's built in.

if(getenv('CRAFT_ENVIRONMENT') == 'dev') {
    $basePath = '/Users/amanda/Sites/vbw-craft/web';
    $baseURL = 'http://dev.vonbaerwolf.com';
} else if (getenv('CRAFT_ENVIRONMENT') == 'staging') {
    $basePath = '';
    $baseURL = 'http://staging.vonbaerwolf.com';
} else if (getenv('CRAFT_ENVIRONMENT') == 'production') {
    $basePath = '';
    $baseURL = 'http://vonbaerwolf.com';
}

return [
    'images' => [
        'path' => $basePath . '/assets/images',
        'url' => $baseURL . '/assets/images',
    ],
    'pdfs' => [
        'path' => $basePath . '/assets/pdfs',
        'url' => $baseURL . '/assets/pdfs',
    ],
    'people' => [
        'path' => $basePath . '/assets/images/people',
        'url' => $baseURL . '/assets/images/people',
    ],
];