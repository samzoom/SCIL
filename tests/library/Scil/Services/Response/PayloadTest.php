<?php

/**
* 
*/
class Scil_Services_Response_Payload_Test extends PHPUnit_Framework_TestCase
{
	
	function setUp()
	{
		$this->payload = new Scil_Services_Response_Payload;
	}
	
	public function testConstructorAndAccessors()
	{
		$metadata = array(
			'author' => 'James',
			'desc' => 'Stuff about stuff'
		);
		$contentType = 'text/html';
		$content = array('stuff');
		
		$payload = new Scil_Services_Response_Payload(array(
			'metadata' => $metadata,
			'contentType' => $contentType,
			'payload' => $content
		));
		
		$this->assertEquals($metadata, $payload->getMetadata());
		$this->assertEquals($contentType, $payload->getContentType());
		$this->assertEquals($content, $payload->getPayload());
	}
	
	public function testFactory()
	{
		$payload = Scil_Services_Response_Payload::factory('json');
		
		$this->assertTrue($payload instanceof Scil_Services_Response_Payload_Json);
	}
	
	public function testSerialize()
	{
		$metadata = array(
			'author' => 'James',
			'desc' => 'Stuff about stuff'
		);
		$contentType = 'text/html';
		$content = array('stuff');
		
		$this->payload->setMetadata($metadata);
		$this->payload->setPayload($content);
		$this->payload->setContentType($contentType);
		
		$serial = $this->payload->serialize();
		$payload = new Scil_Services_Response_Payload();
		$payload->unserialize($serial);
		
		$this->assertEquals($this->payload, $payload);
	}
}
