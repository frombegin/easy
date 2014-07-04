<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Core;

/**
 * Description of Utils
 *
 * @author Administrator
 */
class Utils {
    
    public static function isIterable($value) {
        return \is_array($value) || $value instanceof \Traversable;
    }
}
