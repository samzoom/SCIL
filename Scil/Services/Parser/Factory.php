<?php
/**
 * Provides a factory method for creating parsers
 *
 * @package Scil Services Parser
 * @author Sam de Freyssinet
 */
class Scil_Services_Parser_Factory
{
	/**
	 * Create a new parser based on the input
	 *
	 * @param string $type 
	 * @param Scil_Services_Response $input 
	 * @return Scil_Services_Parser_Abstract
	 * @access public
	 * @static
	 */
	static public function factory($type, Scil_Services_Response $input = NULL)
	{
		return new $type($input);
	}
}