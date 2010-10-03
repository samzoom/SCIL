<?php

/**
* 
*/
class Scil_Services_Parser_Abstract_Test extends PHPUnit_Framework_TestCase
{
	
	function setUp()
	{
		$this->parser = $this->getMockForAbstractClass('Scil_Services_Parser_Abstract');
	}
	
	public function testInputGetterSetter()
	{
		$input = $this->getMock('Scil_Services_Response');
		$this->parser->setInput($input);
		
		$this->assertSame($input, $this->parser->getInput());
	}
	
	public function testGetParserName()
	{
		$parser = $this->getMockForAbstractClass('Scil_Services_Parser_Abstract', array(), 'Mr_Parser');
		$this->assertEquals('Mr_Parser', $parser->getParserName());
	}
}
