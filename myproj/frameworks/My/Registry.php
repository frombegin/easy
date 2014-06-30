<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My;

/**
 * Description of Registry
 *
 * @author baohua
 */
class Registry {

    /**
     * get value of key
     * 
     * @param string $key
     * @return mixed|null return value of key
     */
    public function get($key, $default = NULL) {
        
    }

    public function getOrThrow($key) {
        $value = $this->get($key);
        if (is_null($value)) {
            throw BadConfigurationException("$key . is NOT found.");
        }
        return $value;
    }

    /**
     * set value of key
     * 
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value) {
        
    }

}
