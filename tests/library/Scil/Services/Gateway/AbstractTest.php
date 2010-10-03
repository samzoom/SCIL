<?php

/**
* 
*/
class Scil_Gateway_Abstract_Test extends PHPUnit_Framework_TestCase
{
	
	function setUp()
	{
		$this->gateway = $this->getMockForAbstractClass('Scil_Services_Gateway_Abstract');
	}
	
	public function testRequestSetterGetter()
	{
		$request = $this->getMock('Scil_Services_Request');
		$this->gateway->setRequest($request);
		$this->assertSame($request, $this->gateway->getRequest());
	}
	
	public function testGetResponseNotExecuted()
	{
		$this->assertNull($this->gateway->getResponse());
	}
	
	public function testSerialize()
	{
		$request = new Scil_Services_Request;
		
		$this->gateway->setRequest($request);
		$serial = $this->gateway->serialize();
		
		$gateway = $this->getMockForAbstractClass('Scil_Services_Gateway_Abstract');
		$gateway->unserialize($serial);
		
		$this->assertTrue($this->gateway == $gateway);
	}
}
