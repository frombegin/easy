<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My;

/**
 * Description of Configuration
 *
 * @author Administrator
 */
class Configuration implements IConfigurable {

    /**
     * 
     * @param array $options
     */
    public function config($options) {
        assert(is_array($options) || $options instanceof \Traversable);
        foreach ($options as $key => $value) {
            if (!array_key_exists($key, $this)) {
                throw new \InvalidArgumentException("options $key does not exist!");
            }
            $this->$key = $value;
        }
    }

}
