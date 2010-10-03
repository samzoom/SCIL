<?php

class Scil_Services_Model_Field_Set extends Scil_Services_Model_Field_Enum
{
	/**
	 * The value type
	 *
	 * @var string
	 */
	protected $_type = 'set';
	
	/**
	 * Applies the correct field validation
	 *
	 * @param Zend_Validate $validators 
	 * @return void
	 * @access protected
	 */
	protected function addFieldValidator(Zend_Validate $validators)
	{
		$validators->addValidator(new Scil_Services_Model_Field_Validator_Set($this->getEnumeration()));
		return;
	}
}