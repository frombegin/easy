<?php

/*
 * copyright (c) 2014, frombegin at gmail.com
 */

namespace My;

/**
 *
 * @author baohua
 */
interface IEntityCRUD {

    public function create($storage);   // $storage can be PDO, Cache, CachedPDO, ...

    public function read($storage);

    public function update($storage);

    public function delete($storage);
}
