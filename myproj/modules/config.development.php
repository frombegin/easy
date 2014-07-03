<?php

return array(
    // pdo options
//    'pdo' => array(
//        'dsn' => '',
//        'user' => '',
//        'passwd' => '',
//    ),
    // dbengine
    'dbengine' => array(
        'class' => 'My\Db\DbEnginePdo',
        'options' => array(
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
);
