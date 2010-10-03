<?php
/**
 * Parses a response into something more meaningful
 * for the Scil_Services_Model
 *
 * @package Scil Services
 * @author Sam de Freyssinet
 * @abstract
 */
abstract class Scil_Services_Parser_Abstract
{
	/**
	 * Input string unparsed
	 *
	 * @var Scil_Services_Response
	 */
	protected $_input;

	/**
	 * Constructor, optionally allows input
	 * to be passed
	 *
	 * @param Scil_Services_Response $input [Optional]
	 * @access public
	 */
	public function __construct(Scil_Services_Response $input = NULL)
	{
		if (NULL !== $input) {
			$this->setInput($input);
		}
	}

	/**
	 * Set the input value
	 *
	 * @param Scil_Services_Response $input 
	 * @return self
	 * @access public
	 */
	public function setInput(Scil_Services_Response $input)
	{
		$this->reset();
		$this->_input = $input;

		return $this;
	}

	/**
	 * Return the input value
	 *
	 * @return Scil_Services_Response
	 * @access public
	 */
	public function getInput()
	{
		return $this->_input;
	}

	/**
	 * Return the parser name for the class
	 *
	 * @return string
	 * @access public
	 */
	public function getParserName()
	{
		return get_class($this);
	}

	/**
	 * Parse the input string into something
	 * more meaningful
	 *
	 * @param Scil_Services_Model_Abstract $model
	 * @return array|boolean
	 * @access public
	 * @abstract
	 */
	abstract public function parse(Scil_Services_Model_Abstract $model);

	/**
	 * Resets the parser
	 *
	 * @return self
	 * @access public
	 */
	public function reset()
	{
		$this->_input = NULL;
		return $this;
	}
}