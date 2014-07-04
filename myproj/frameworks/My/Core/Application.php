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

    const EVENT_APPLICATION_INITIALIZE = 'event.application.initialize';
    const EVENT_APPLICATION_FINALIZE = 'event.application.finalize';

    private static $instance = null;
    private $registry = null;
    private $config = null;
    private $components = array();
    private $modules = array(); // array of name => Module()
    
    private $projectRoot = NULL;

    public function getInstance() {
        assert(self::$instance, "you haven't create application yet.");
        return self::$instance;
    }

    public function __construct() {
        assert(is_null(self::$instance), 'you have an application instance already.');
        parent::__construct();
    }
    
    protected function createModules($moduleNames) {
        $modulesRootDir = $this->projectRoot . '/modules';
        foreach($moduleNames as $moduleName) {
            $module = new Module($moduleName);
            if($module instanceof IConfigurable) {
                $moduleConfigFilename = $modulesRootDir . '/' . $moduleName . '/config.php';
                $options = require_once $moduleConfigFilename;
                $module->config($options);
            }
            $this->modules[$moduleName] = $module;
        }
    }

    public function config($options) {
        assert(isset($options['project']), 'Bad application configuation: project key must exists.');
        assert(isset($options['components']), 'Bad Application configuation: components key must exists.');
        assert(isset($options['modules']), 'Bad application configuation: modules key must exists.');
        
        $this->config = $options;
        $this->projectRoot = $options['project']['root'];
        $this->createModules($options['modules']);
    }
    
    public function getProjectRoot() {
        return $this->projectRoot;
    }

    protected function createComponent($name) {
        if (!isset($this->config['components'][$name])) {
            throw new BadConfigurationException("Component \"$name\" is NOT found!");
        }

        $componentConfig = $this->config['components'][$name];
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

    protected function createModule($name) {
        if (!isset($this->config['modules'][$name])) {
            throw new BadConfigurationException("Module \"$name\" is NOT found!");
        }
        //TODO: ...
    }

    public function getModule($name) {
        if (isset($this->modules[$name])) {
            $component = $this->modules[$name];
        } else {
            $component = $this->createModule($name);
            $this->modules[$name] = $component;
        }
        return $component;
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

    protected function main() {
        
    }

    protected function initialize() {
        // TODO: internal initializing
        // ...
        $this->fireEvent(self::EVENT_APPLICATION_INITIALIZE, NULL);
    }

    protected function finalize() {
        $this->fireEvent(self::EVENT_APPLICATION_FINALIZE, NULL);
        // ...
        //TODO: internal finalizing
    }

    /**
     * run application
     */
    public function run() {
        $this->initialize();
        try {
            $this->main();
        } finally {
            $this->finalize();
        }
    }

}
