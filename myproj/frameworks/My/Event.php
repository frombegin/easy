<?php

namespace My;

/**
 * 
 * @version 1.0
 */
class Event {

    private $data = null;
    private $sender = null;
    private $id = null;

    /**
     * 
     * @param sender
     * @param type
     * @param data    data
     */
    public function __construct($sender, $id, $data = null) {
        $this->sender = $sender;
        $this->id = $id;
        $this->data = $data;
    }

    /**
     * 
     */
    public function getData() {
        return $this->data;
    }

    /**
     * 
     */
    public function getSender() {
        return $this->sender;
    }

    /**
     * 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     */
    public function hasData() {
        return !is_null($this->data);
    }

    public function __toString() {
        return __CLASS__ . " (sender: $this->sender, id: $this->id)";
    }

}
