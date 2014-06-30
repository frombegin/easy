<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My;

/**
 * Abstract Factory
 *
 * @version 1.0
 */
class Factory {

    private $class;
    private $options;

    public function __construct($class, $options) {
        assert(is_string($class), 'class name must be string');
        $this->class = $class;
        $this->options = $options;
    }

    public function createInstance() {
        // create instance
        $instance = new $this->class();
        // do config if configuable
        if ($instance instanceof IConfigurable) {
            $instance->config($this->options);
        }
        return $instance;
    }

}
