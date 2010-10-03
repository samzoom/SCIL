<?php

class Scil_Services_Model_Field_StringMock implements Scil_Services_Model_Field_ObjectInterface
{
	public function validate()
	{
		return true;
	}
	
	public function getValues()
	{
		return 'James';
	}
	
	public function setValues(array $values)
	{
		return true;
	}
	
	public function setValue()
	{
		return true;
	}
}