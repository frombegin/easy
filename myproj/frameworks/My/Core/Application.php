<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Core;

/**
 * Application class
 *
 * @author baohua
 */
class Application {

    private static $instance = null;
    private $registry = null;
    private $config = null;
    private $components = array();

    public function getInstance() {
        assert(self::$instance, "you haven't create application.");
        return self::$instance;
    }

    public function __construct($config) {
        assert(is_null(self::$instance), 'you have an application instance already.');
        self::$instance = $this;
        $this->config = $config;
        $this->registry = new Registry();
    }

    public function createComponent($name) {
        if (!isset($this->config[$name])) {
            throw new BadConfigurationException("component \"$name\" is NOT found!");
        }

        $componentConfig = $this->config[$name];
        $class = $componentConfig['class'];

        $component = new $class;
        if ($component instanceof IConfigurable) {
            $options = $componentConfig['options'];
            $component->config($options);
        }
        return $component;
    }

    public function getComponent($name) {

        if (isset($this->components[$name])) {
            $component = $this->components[$name];
        } else {
            $component = $this->createComponent($name);
            $this->components[$name] = $component;
        }
        return $component;
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
        return $this->getComponent('cache');
    }
    
    public function getDbEngine() {
        return $this->getComponent('dbengine');
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
