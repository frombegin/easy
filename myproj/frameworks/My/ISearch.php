<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My;

/**
 * Search interface
 * 
 * @version 1.0
 */
interface ISearch {

    /**
     * search by keywords and options
     * 
     * @param string $keyword
     * @param array $options
     * @return array search result
     */
    public function search($keyword, $options);
}
