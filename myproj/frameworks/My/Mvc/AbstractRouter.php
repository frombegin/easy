<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Mvc;

/**
 * Description of LiteralRouter
 *
 * @author Administrator
 */
abstract class AbstractRouter implements IRouter, \My\Core\IConfigurable {

    private $controllerClass;
    private $actionName;

    public function __construct() {
        
    }   
    
    public function config($options) {
        $this->controllerClass = $options['controller'];
        $this->actionName = $options['action'];
    }
    
    public function invoke(Request $request) {
        $actionMethod = new \ReflectionMethod($this->controllerClass, $this->actionName . 'Action');
        $response = new Response();
        $actionMethod->invoke(new $this->controllerClass(), $request, $response);
        return $response;
    }

}
