<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Mvc;

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
     * @return \My\Response 
     */
    public function dispatch(Request $request) {
        foreach ($this->routers as $router) {
            if ($router->match($request)) {
                $response = $router->invoke($request);
                return $response;
            }
        }
        return \NULL;
    }

}
