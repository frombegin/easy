<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Db;

/**
 * Description of DbEnginePdo
 *
 * @author baohua
 */
class DbEnginePdo extends \My\Core\Component implements IDbEngine {

    private $pdo = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function config($options) {
        $dsn = $options['dsn'];
        $username = $options['username'];
        $password = $options['password'];
        $driverOptions = isset($options['driverOptions']) ? $options['driverOptions'] : \NULL;

        $this->pdo = new \PDO($dsn, $username, $password, $driverOptions);
    }

}
