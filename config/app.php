<?php
use craft\helpers\App;
use craft\services\Api;

// $apiUrl = 'https://api.craftcms.com';
// $consoleUrl = 'https://console.craftcms.com';
//$apiUrl = 'https://staging-1750ml.api.craftcms.com';
//$consoleUrl = 'https://staging-1750ml.console.craftcms.com';
$apiUrl = 'https://api.craftnet.ddev.site';
$consoleUrl = 'https://console.craftnet.ddev.site';

return [
    'modules' => [
        'my-module' => \modules\Module::class,
    ],
    'bootstrap' => ['my-module'],
    'components' => [
        'redis' => [
            'class' => yii\redis\Connection::class,
            'hostname' => App::env('REDIS_HOSTNAME'),
        ],
        'cache' => function () {
            return \Craft::createObject([
                'class' => \yii\redis\Cache::class,
                'defaultDuration' => \Craft::$app->getConfig()->getGeneral()->cacheDuration,
            ]);
        },
        'session' => [
            'class' => \yii\redis\Session::class,
            'as session' => [
                'class' => \craft\behaviors\SessionBehavior::class,
            ],
        ],
        // 'pluginStore' => [
        //     'craftApiEndpoint' => "$apiUrl/v1",
        //     'craftIdEndpoint' => $consoleUrl,
        //     'craftOauthEndpoint' => "$consoleUrl/oauth",
        // ],
        // 'api' => function() use ($apiUrl) {
        //     $client = Craft::createGuzzleClient([
        //         'base_uri' => "$apiUrl/v1",
        //         'verify' => false,
        //     ]);
        //     return new Api([
        //         'client' => $client,
        //     ]);
        // },
    ]
];
