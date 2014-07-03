<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Core;

/**
 * Description of Dispatcher
 *
 * @author baohua
 */
class Dispatcher extends Component {

    private $routers = null;

    public function __construct() {
        $this->routers = new \SplObjectStorage();
    }

    /**
     * 
     * @param \My\IRouter $router
     */
    public function addRouter(IRouter $router) {
        $this->routers->attach($router);
    }

    /**
     * 
     * @param \My\IRouter $router
     */
    public function removeRouter(IRouter $router) {
        $this->routers->detach($router);
    }

    /**
     * dispatch requests
     * 
     * @param \My\Request $request
     * @param \My\Response $response
     */
    public function dispatch(Request $request, Response $response) {
        
    }

}
