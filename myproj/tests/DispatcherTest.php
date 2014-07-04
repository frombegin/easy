<?php

/*
 * copyright (c) 2014, frombegin at gmail.com.
 */

class DispatcherTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        
    }

    protected function tearDown() {
        
    }

    public function testDispatch() {
        $dispatcher = new \My\Mvc\Dispatcher();
        
        $router = new \My\Mvc\LiteralRouter();
        $router->config(array(
            'controller' => '\My\Mvc\Controller',
            'action' => 'index',
            'path' => 'test/path'
        ));
        $dispatcher->addRouter($router);
        
        $dispatcher->dispatch();
    }

}
