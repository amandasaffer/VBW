<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 */

$customConfig = [
    // Global settings
    '*' => [
        'defaultWeekStartDay' => 0,
        'enableCsrfProtection' => true,
        'omitScriptNameInUrls' => true,
        'cpTrigger' => 'admin',
    ],

    // Dev environment settings
    'dev' => [
        'devMode' => true,
        'siteUrl' => 'http://dev.vonbaerwolf.com',
        'environmentVariables' => [
            'basePath' => '/Users/dustincooper/Sites/VBW/web/',
            'baseUrl' => 'http://dev.vonbaerwolf.com'
        ]
    ],

    // Staging environment settings
    'staging' => [
        // Base site URL
        'siteUrl' => null,
    ],

    // Production environment settings
    'production' => [
        // Base site URL
        'siteUrl' => null,
    ],
];

return $customConfig;