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

return [
    'omitScriptNameInUrls' => true,
    'securityKey' => App::env('CRAFT_SECURITY_KEY'),
    'devMode' => App::env('CRAFT_DEV_MODE'),
    'allowAdminChanges' => App::env('CRAFT_ALLOW_ADMIN_CHANGES'),
    'disallowRobots' => App::env('CRAFT_DISALLOW_ROBOTS'),
    'aliases' => [
        '@web' => App::env('WEB_URL'),
        '@webroot' => App::env('WEBROOT_PATH'),
    ]
];
