<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My\Store;

/**
 *
 * @author baohua
 */
interface StoreInterface {

    public function addProduct(ProductInterface $product);

    public function removeProduct($id);
}
