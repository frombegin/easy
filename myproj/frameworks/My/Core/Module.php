<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Core;

/**
 * Description of Module
 *
 * @author Administrator
 */
class Module extends Component {

    private $name;

    public function __construct($name) {
        parent::__construct();
        $this->name = $name;
    }

    public function config($options) {
        
    }

}
