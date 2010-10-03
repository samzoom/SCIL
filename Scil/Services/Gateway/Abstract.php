<?php
/**
 * Abstract Gateway interface
 *
 * @package Scil Services
 * @author Sam de Freyssinet
 */
abstract class Scil_Services_Gateway_Abstract implements Serializable
{
	/**
	 * The Scil_Services_Request to process
	 *
	 * @var Scil_Services_Request
	 */
	protected $_request;

	/**
	 * The Scil_Services_Response to pass back
	 *
	 * @var Scil_Services_Response
	 */
	protected $_response;

	/**
	 * The executed state of this object
	 *
	 * @var boolean
	 */
	protected $_executed = FALSE;

	/**
	 * Constructs the gateway object
	 *
	 * @param Scil_Services_Request $request [Optional]
	 * @access public
	 */
	public function __construct(Scil_Services_Request $request = NULL)
	{
		if (NULL !== $request) {
			$this->setRequest($request);
		}
	}

	/**
	 * Set the request object to this gateway
	 *
	 * @param Scil_Services_Request $request 
	 * @return self
	 * @access public
	 */
	public function setRequest(Scil_Services_Request $request)
	{
		$this->_request = $request;
		return $this;
	}

	/**
	 * Get the request object
	 *
	 * @return Scil_Services_Request
	 * @access public
	 */
	public function getRequest()
	{
		return $this->_request;
	}

	/**
	 * Get the response
	 *
	 * @return Scil_Services_Response|void
	 * @access public
	 */
	public function getResponse()
	{
		return $this->isExecuted() ? $this->_response : NULL;
	}

	/**
	 * Get the executed state of this gateway
	 *
	 * @return boolean
	 * @access public
	 */
	public function isExecuted()
	{
		return $this->_executed;
	}

	/**
	 * Execute a request and return the
	 * resulting object
	 *
	 * @param Scil_Services_Request $request 
	 * @access public
	 * @return self
	 * @abstract
	 */
	abstract public function exec();

	/**
	 * Serialises this object
	 *
	 * [SPL Serializable]
	 * 
	 * @param array $toSerialize [Optional]
	 * @return string
	 * @access public
	 */
	public function serialize(array $toSerialize = array())
	{
		$toSerialize += array(
			'_request'   => $this->_request,
			'_response'  => $this->_response,
			'_executed'  => $this->_executed,
		);

		return serialize($toSerialize);
	}

	/**
	 * Unserialises this object
	 *
	 * [SPL Serializable]
	 * 
	 * @param string $serialized 
	 * @return void
	 * @access public
	 */
	public function unserialize($serialized)
	{
		$unserialized = unserialize($serialized);

		foreach ($unserialized as $key => $value) {
			$this->$key = $value;
		}
	}
}