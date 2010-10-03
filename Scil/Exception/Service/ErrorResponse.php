<?php
/**
 * Scil_Exception_Service_ErrorResponse
 *
 * The service exception class
 *
 * @category  Scil
 * @package   Scil_Service
 * @author	  Matthew Setter, msetter@ibuildings.com
 */
class Scil_Exception_Service_ErrorResponse extends Scil_Exception
{
	/**
	 * An array of error messages.
	 *
	 * @var array
	 **/
	static public $messages = array();
	
	/**
	 * Find the custom message and send it to the parent
	 *
	 * @param string  $message the message to display
	 * @param integer $code    the code which matches an element in the message array
	 * @return void
	 **/
	public function __construct($message, $code = 0){
		if ($message == NULL) {
			if (count(self::$messages) > 0 && array_key_exists($code, self::$messages)) {
				$message = self::$messages[$code];
			} else {
				$message = "Fault in backend system.";
			}
		}
		return parent::__construct($message, $code);
	}
}