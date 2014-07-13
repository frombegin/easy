<?php

/*
 * copyright (c) 2014, frombegin at gmail.com.
 */

// register autoloaders
$ROOT_DIR = dirname(__DIR__);
$autoloader = require_once $ROOT_DIR . '/vendor/autoload.php';
$autoloader->add('My', $ROOT_DIR . '/frameworks');

// load application config
$isDeveloping = TRUE;
if ($isDeveloping) {
    $config = require_once $ROOT_DIR . '/modules/config.development.php';
} else {
    $config = require_once $ROOT_DIR . '/modules/config.production.php';
}

// create application & run
$app = new My\Core\Application();
$app->config($config);
$app->run();

var_dump($app->getComponent('cache'));
var_dump($app->getCache());
