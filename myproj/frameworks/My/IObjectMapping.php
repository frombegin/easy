<?php

namespace My;

/**
 *
 * @author Administrator
 */
interface IObjectMapping {

    public function isNew();

    public function load(IDataLayer $dataLayer);

    public function save(IDataLayer $dataLayer);

    public function delete(IDataLayer $dataLayer);
}
