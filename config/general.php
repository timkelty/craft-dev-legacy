<?php
use craft\helpers\App;

return [
    'omitScriptNameInUrls' => true,
    'aliases' => [
        '@web' => App::env('WEB_URL'),
        '@webroot' => App::env('WEBROOT_PATH'),
    ]
];
