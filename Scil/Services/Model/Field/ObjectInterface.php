<?php
/**
 * ObjectInterface to allow models to be used as properties.
 * Any model that will be used as a field must implement this
 * interface.
 *
 * @category Interface
 * @package Scil Services
 * @author Sam de Freyssinet
 */
interface Scil_Services_Model_Field_ObjectInterface
{
	/**
	 * Get an associative array of values
	 * out the object
	 *
	 * @return array
	 * @access public
	 */
	public function getValues();

	/**
	 * Set values to the object based on an
	 * associative array of key/value pairs
	 *
	 * @param array $values 
	 * @return self
	 * @access public
	 */
	public function setValues(array $values);
}