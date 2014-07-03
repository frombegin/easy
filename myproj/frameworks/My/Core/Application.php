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
class Application extends Component {

    private static $instance = null;
    private $registry = null;
    private $config = null;
    private $components = array();

    public function getInstance() {
        assert(self::$instance, "you haven't create application yet.");
        return self::$instance;
    }

    public function __construct() {
        assert(is_null(self::$instance), 'you have an application instance already.');
        parent::__construct();
    }

    public function config($options) {
        $this->config = $options;
    }

    protected function createComponent($name) {
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
        if (is_null($this->registry)) {
            $this->registry = new Registry();
        }
        return $this->registry;
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
