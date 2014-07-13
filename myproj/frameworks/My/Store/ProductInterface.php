<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Store;

/**
 *
 * @author baohua
 */
interface ProductInterface extends EntityInterface {

    public function getName();

    public function getDescription();

    public function getPrice();

    public function getDiscount();

    public function getImages();

    public function getRatings();
}
