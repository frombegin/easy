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
class Application extends Object {

// use Registry instead
// ---------------------
//    private $cache = null;
//    private $cacheFactory = null;
//    private $pdo = null;
//    private $pdoFactory = null;

    const EVENTID_BEFORE_STARTUP = 'application.before.startup';
    const EVENTID_AFTER_STARTUP = 'application.after.startup';
    const EVENTID_BEFORE_SHUTDOWN = 'application.before.shutdown';
    const EVENTID_AFTER_SHUTDOWN = 'application.after.shutdown';

    private $registry = null;

    private $dispatcher = null;
    
    public function __construct($config) {
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
        $this->fireEvent(self::EVENTID_BEFORE_STARTUP, NULL);
        //TODO: startup
        $this->fireEvent(self::EVENTID_AFTER_STARTUP, NULL);
    }

    public function shutdown() {
        $this->fireEvent(self::EVENTID_BEFORE_SHUTDOWN, NULL);
        //TODO: shutdown
        $this->fireEvent(self::EVENTID_AFTER_SHUTDOWN, NULL);
    }

    public function main() {
        $this->dispatcher = new Dispatcher();
        $this->dispatcher->dispatch();
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
