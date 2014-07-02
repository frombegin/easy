<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
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
            $pdoOptions = $this->registry->getOrThrow('pdo.options');
            $pdo = new \PDO($pdoOptions['dsn'], $pdoOptions['username'], $pdoOptions['passwd'], $pdoOptions['options']);
            $this->registry->set('pdo', $pdo);
        }
        return $pdo;
    }

    public function getCache() {
        $cache = $this->registry->get('cache');
        if (is_null($cache)) {
            $cacheType = $this->registry->getOrThrow('cache.type');
            $cache = new $cacheType();
            $cacheOptions = $this->registry->getOrThrow('cache.options');
            if ($cache instanceof IConfigurable) {
                $cache->config($cacheOptions);
            }
            $this->registry->set('cache', $cache);
        }
        return $cache;
    }

    public function getResponse() {
        
    }

    public function getRequest() {
        
    }

    public function startup() {
        
    }

    public function shutdown() {
        
    }

    public function main() {
        
    }

    public function handleException($e) {
        
    }

    /**
     * run application
     */
    public function run() {
        $this->startup();
        try {
            $this->main();
        } catch (\Exception $e) {
            $this->handleException($e);
        } finally {
            $this->shutdown();
        }
    }

}
