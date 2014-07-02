<?php


namespace My;

/**
 *
 * @author Administrator
 */
interface IDataLayer {

    public function getPdo();

    public function getCache();
}
