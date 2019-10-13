<?php

use Slim\App;

require_once __DIR__ . "/../vendor/autoload.php";

session_start();

$container['settings'] = [
    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => true
];
$app = new App($container);
require __DIR__ . "/../src/constant.php";
$app->getContainer()[RUMAH_SETTINGS] = require __DIR__ . "/../src/settings.php";

require __DIR__ . "/../src/container.php";
require __DIR__ . "/../src/routes.php";

$app->run();