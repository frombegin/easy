<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Cache;

/**
 * Description of NullCache
 *
 * @author baohua
 */
class NullCache extends \My\Core\Component implements ICache {

    public function delete($key) {
        
    }

    public function flush() {
        
    }

    public function get($key) {
        
    }

    public function mget(array $keys) {
        
    }

    public function set($key, $value, $expire) {
        
    }

    /**
     * override
     * 
     * @param array $options
     */
    public function config($options) {
        
    }

}
