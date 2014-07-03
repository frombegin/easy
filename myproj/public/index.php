<?php

/*
 * copyright (c) 2014, frombegin at gmail.com.
 */

// register autoloaders
require_once dirname(__DIR__) . '/frameworks/My/Autoloader.php';
My\Autoloader::register();

// create application & run
$app = new My\Core\Application();
$app->run();