<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Core;

/**
 * Description of Component
 *
 * @author baohua
 */
abstract class Component extends Object implements IConfigurable {

    /**
     * get logger of THIS component
     * 
     * @return ILogger
     */
    public function getLogger() {
        
    }

}
