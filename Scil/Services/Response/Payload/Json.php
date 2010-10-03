<?php
/**
 * Service response payload for JSON
 *
 * @package Scil Services Response Payload
 * @author Sam de Freyssinet
 */
class Scil_Services_Response_Payload_Json extends Scil_Services_Response_Payload
{
	/**
	 * Serialise the payload into string form
	 *
	 * @return string
	 * @access public
	 */
	public function serialize()
	{
		$output = (object) array(
			'contentType'  => $this->getContentType(),
			'payload'      => $this->getPayload(),
			'metadata'     => $this->getMetadata(),
		);

		return json_encode($output);
	}

	/**
	 * Unserialise the payload from a string
	 *
	 * @param string $serialised 
	 * @return void
	 * @access public
	 * @throws Scil_Exception Throws exception if the data supplied is not valid JSON
	 */
	public function unserialize($serialized)
	{
		$input = json_decode($serialized);
		
		if ($input === NULL) {
			throw new Scil_Exception('Invalid data format');
		}

		$this->setContentType( isset($input->contentType) ? $input->contentType : NULL )
			->setPayload( isset($input->payload) ? $input->payload : NULL )
			->setMetadata( isset($input->metadata) ? $input->metadata : NULL );
	}
}