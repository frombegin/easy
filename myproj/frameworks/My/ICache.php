<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My;

/**
 * Cache interface
 * 
 * @version 1.0
 */
interface ICache {

    /**
     * get value of key
     * 
     * @param key
     * @return mixed value of the key
     */
    public function get($key);

    /**
     * get multi value from keys
     * 
     * @param keys
     * @return array value array
     */
    public function mget(array $keys);

    /**
     * set value of the key and expire
     * 
     * @param key
     * @param value
     * @param expire
     */
    public function set($key, $value, $expire);

    /**
     * delete special key and assisoate value
     * 
     * @param key
     */
    public function delete($key);

    /**
     * delete all key
     */
    public function flush();
}
