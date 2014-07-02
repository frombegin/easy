<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My;

/**
 * Description of Object
 *
 * @author Administrator
 */
class Object {

    private $listeners = NULL;
    private $id = NULL;

    public function __construct() {
        $this->id = uniqid();
    }

    public function getId() {
        return $this->id;
    }

    public function fireEvent($eventId, $data) {
        if (isset($this->listeners)) {
            $event = new Event($this->id, $eventId, $data);
            foreach ($this->listeners as $listener) {
                $listener->handleEvent($event);
            }
        }
    }

    public function addListener($listener) {
        if (is_null($this->listeners)) {
            $this->listeners = new \SplObjectStorage();
        }
        $this->listeners->attach($listener);
    }

    public function removeListener($listener) {
        $this->listeners->detach($listener);
        if ($this->listeners->count() == 0) {
            $this->listeners = NULL;
        }
    }

}
