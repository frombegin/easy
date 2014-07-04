<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Mvc;

/**
 * Description of Request
 *
 * @author baohua
 */
class Request {

    private $path;

    public function __construct() {
        $this->path = $_SERVER['PATH_INFO'];
    }

    public function getPath() {
        return $this->path;
    }
}
