<?php

/*
 * copyright (c) 2014, frombegin at gmail.com.
 */

// register autoloaders
require_once dirname(__DIR__) . '/frameworks/My/Autoloader.php';
My\Autoloader::register();

// load application config
$isDeveloping = true;
if ($isDeveloping) {
    $config = require_once dirname(__DIR__) . '/modules/config.development.php';
} else {
    $config = require_once dirname(__DIR__) . '/modules/config.production.php';
}

// create application & run
$app = new My\Application($config);
$app->run();
