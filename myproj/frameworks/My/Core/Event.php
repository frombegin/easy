<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Core;

/**
 * Description of Event
 *
 * @author baohua
 */
class Event {

    private $sender;
    private $id;
    private $data = NULL;

    public function __construct($sender, $id, $data = NULL) {
        $this->sender = $sender;
        $this->id = $id;
        $this->data = $data;
    }

    public function getSender() {
        return $this->sender;
    }

    public function getId() {
        return $this->id;
    }

    public function getData() {
        return $this->data;
    }

    public function hasData() {
        return is_null($this->data);
    }

}
