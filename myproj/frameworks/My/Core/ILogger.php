<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Core;

/**
 *
 * @author baohua
 */
interface ILogger {
    /**
     * 
     * @param string $msg
     */
    public function info($msg);
    
    /**
     * 
     * @param string $msg
     */
    public function warning($msg);
    
    /**
     * 
     * @param string $msg
     */
    public function error($msg);
    
    /**
     * 
     * @param string $msg
     */
    public function fatal($msg);
}
