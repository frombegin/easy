<?php

/*
 * copyright (c) 2014, frombegin at gmail.com.
 */

class ObjectTest extends \PHPUnit_Framework_TestCase implements My\IEventListener {

    private $object;
    
    protected function setUp() {
        $this->object = new My\Object();
        $this->object->addListener($this);
    }

    protected function tearDown() {
        $this->object->removeListener($this);
    }
    
    public function testId() {
        $this->object->fireEvent('hello.event', array());
    }

    public function handleEvent(\My\Event $event) {
        echo $event->getId();
    }

}