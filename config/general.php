<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

$isProd = App::env('CRAFT_ENVIRONMENT') === 'production';
$isDev = !$isProd;

return [
    // Whether generated URLs should omit "index.php"
    'omitScriptNameInUrls' => true,

    // The secure key Craft will use for hashing and encrypting data
    'securityKey' => App::env('CRAFT_SECURITY_KEY'),

    // Whether Dev Mode should be enabled (see https://craftcms.com/guides/what-dev-mode-does)
    'devMode' => $isDev,

    // Whether administrative changes should be allowed
    'allowAdminChanges' => $isDev,

    // Whether crawlers should be allowed to index pages and following links
    'disallowRobots' => !$isProd,

    // 'disabledPlugins' => '*',

    'aliases' => [
        '@web' => App::env('DEFAULT_SITE_URL')
    ]
];
