<?php
/**
 * Autoincrement Field
 *
 * @package Scil Services Model Field
 * @author Sam de Freyssinet
 */
class Scil_Services_Model_Field_Auto extends Scil_Services_Model_Field_Abstract
{
	/**
	 * The value type
	 *
	 * @var string
	 */
	protected $_type = 'auto';
	
	/**
	 * Overload the allow null setting
	 *
	 * @var string
	 */
	protected $_allowNull = TRUE;

	/**
	 * Controls whether the field is editable
	 *
	 * @var boolean
	 */
	protected $_editable = FALSE;

	/**
	 * Run the filters and validation on this field
	 *
	 * @return boolean
	 * @access public
	 */
	public function validate()
	{
		return TRUE;
	}

	/**
	 * Do nothing, as auto fields are generated by service
	 *
	 * @param mixed $value 
	 * @return void
	 * @access protected
	 */
	protected function parseValue($value)
	{
		return;
	}
}