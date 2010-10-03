<?php

class Scil_Services_Model_Field_IntegerMock implements Scil_Services_Model_Field_ObjectInterface
{
	public function validate()
	{
		return true;
	}
	
	public function getValues()
	{
		return 19;
	}
	
	public function setValues(array $values)
	{
		return true;
	}
}