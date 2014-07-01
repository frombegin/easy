<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My;

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
}
