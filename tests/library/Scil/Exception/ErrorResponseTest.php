<?php

/**
* 
*/
class Scil_Exception_ErrorResponse_Test extends PHPUnit_Framework_TestCase
{
	
	function testDefaultMessage()
	{
		$errorResp = new Scil_Exception_Service_ErrorResponse(null);
		
		$this->assertEquals('Fault in backend system.', $errorResp->getMessage());
	}
}
