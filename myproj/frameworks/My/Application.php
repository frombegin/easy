<?php

/*
 * copyright (c) 2014, frombegin at gmail.com.
 */

namespace My;

/**
 * Application class
 *
 * @author baohua
 */
class Application {

// use Registry instead
// ---------------------
//    private $cache = null;
//    private $cacheFactory = null;
//    private $pdo = null;
//    private $pdoFactory = null;
    private $registry = null;

    public function __construct() {
        $this->registry = new Registry();
    }

    public function getRegistry() {
        return $this->registry;
    }
    
    public function getPdo() {
        $pdo = $this->registry->get('pdo');
        if (is_null($pdo)) {
            $pdoOptions = $this->registry->get('pdo.options');
            if (is_null($pdoOptions)) {
                throw BadConfigurationException('pdo.options is NOT found.');
            }
            $pdo = new \PDO($pdoOptions['dsn'], $pdoOptions['username'], 
                    $pdoOptions['passwd'], $pdoOptions['options']);
            $this->registry->set('pdo', $pdo);
        }
        return $pdo;
    }

    public function getCache() {
        
    }

    public function getResponse() {
        
    }

    public function getRequest() {
        
    }

    /**
     * run application
     */
    public function run() {
        
    }

}
