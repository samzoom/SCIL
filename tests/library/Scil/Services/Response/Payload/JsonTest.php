<?php

class Scil_Services_Response_Payload_Json_Test extends PHPUnit_Framework_TestCase
{
	
	function setUp()
	{
		$this->parser = new Scil_Services_Response_Payload_Json;
	}
	
	public function testSerialize()
	{
		$this->parser->setMetadata(array('desc' => 'something'));
		$this->parser->setPayload(array('something else'));
		$this->parser->setContentType(array('json'));
		
		$serial = $this->parser->serialize();
		
		$parser = new Scil_Services_Response_Payload_Json;
		$parser->unserialize($serial);
		
		$this->assertEquals($this->parser, $parser);
	}
}
