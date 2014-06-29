<?php

/*
 * copyright (c) 2014, frombegin at gmail.com.
 */

require_once dirname(__DIR__) . '/frameworks/My/Autoloader.php';

My\Autoloader::register();

$app = new My\Application();
$app->run();