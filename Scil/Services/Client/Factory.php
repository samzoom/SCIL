<?php
/**
 * Provides a factory method for creating clients
 *
 * @package Scil Services Client
 * @author Sam de Freyssinet
 */
class Scil_Services_Client_Factory
{
	/**
	 * Create a new client based on the input
	 *
	 * @param string $type 
	 * @param Scil_Services_Response $input 
	 * @return Scil_Services_Client_Abstract
	 * @access public
	 * @static
	 */
	static public function factory($type, array $dependencies = array())
	{
		return Scil_Services_Client_Abstract::getInstance($type, $dependencies);
	}
}