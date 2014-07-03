<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Core;

/**
 * Compareable of objects
 * 
 * @version 1.0
 */
interface ICompareable {

    /**
     * compare with other object
     * 
     * @param \My\ICompareable $other
     * @return int
     */
    public function compare(ICompareable $other);
}
