<?php

/**
* Just a test implementation of Scil_Services_Model_Abstract to test some of the concrete stuff
*/
class Scil_Services_Model_Mock extends Scil_Services_Model_Abstract
{
	
	protected $_mapping = array(
		'uid' => 'id',
		'name' => 'fullname',
		'same' => 'same'
	);
}
