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
class LiteralRouter extends AbstractRouter {

    private $path;

    public function __construct($path) {
        parent::__construct();
        $this->path = $path;
    }

    public function config($options) {
        parent::config($options);
        $this->path = $options['path'];
    }
    
    public function match(Request $request) {
        return $request->getPath() === $this->path;
    }

}
