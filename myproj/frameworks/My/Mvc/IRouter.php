<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Mvc;

/**
 *
 * @author baohua
 */
interface IRouter {
    /**
     * 
     * @param \My\Request $request
     * @return Boolean
     */
    public function match(Request $request);
    
    /**
     * 
     * @param \My\Mvc\Request $request
     * @return \My\Mvc\Response
     */
    public function invoke(Request $request);
}
