<?php

/*
 * copyright (c) 2014, frombegin at gmail.com.
 */

class SimpleTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
    }

    protected function tearDown() {
    }
    
    public function testTrue() {
        $this->assertTrue(True);
    }
    
    public function testFalse() {
        $this->assertFalse(False);
    }
}