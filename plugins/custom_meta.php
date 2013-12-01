<?php

/**
 * Custom meta for ukcmagicsoc.org
 *
 * @author William Duyck
 * @license https://www.mozilla.org/MPL/2.0/
 */
class Custom_Meta {
	
	public function before_read_file_meta(&$headers)
	{
		$headers['stylesheet'] = 'Stylesheet';
	}
	
}

// End of file
