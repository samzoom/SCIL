<?php
/**
 * The section abstract class adds the isValid() abstract
 * method to the node
 *
 * @package Services Form Wizard Section
 * @category Scil
 * @author Sam de Freyssinet
 * @abstract
 */
abstract class Scil_Services_Form_Wizard_Section_Abstract
	extends Scil_Services_Form_Wizard_Node
{
	/**
	 * The pages valid state based on the models contained
	 * within
	 *
	 * @return void|boolean
	 * @access public
	 * @abstract
	 */
	abstract public function isValid();
}
