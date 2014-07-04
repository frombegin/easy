<?php

return array(
    // project global settings
    "project" => array(
        "root" => dirname(__DIR__),
    ),
    // modules
    'modules' => array(
        'Module1',
        'Module2',
    ),
    // components
    'components' => array(
        // dbengine
        'dbengine' => array(
            'class' => 'My\Db\DbEnginePdo',
            'options' => array(// DbEnginePdo options
                'dsn' => '',
                'username' => '',
                'password' => '',
                'driverOptions' => NULL,
            ),
        ),
        // cache options
        'cache' => array(
            'class' => 'My\Cache\NullCache',
            'options' => array(),
        ),
    ),
);
