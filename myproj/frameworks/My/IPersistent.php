<?php

namespace My;

/**
 *
 * @author Administrator
 */
interface IPersistent {

    public function isNew();

    public function load(IDataLayer $dataLayer);

    public function save(IDataLayer $dataLayer);

    public function delete(IDataLayer $dataLayer);
}


/*

# ---------------------------------------------
 
load
	if not cache.load
		if not db.load
			error
		else
			cache.save
			return
	else
		return

# ---------------------------------------------

save
	if db.save
		set_id
		cache.save
	

# ---------------------------------------------

delete
	if db.delete
		cache.delete

# ---------------------------------------------

 */