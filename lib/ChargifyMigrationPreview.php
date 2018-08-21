<?php
 
//Reference Documentation: http://support.chargify.com/faqs/api/api-prorated-upgrades-downgrades

class ChargifyMigrationPreview
{
	//******************************
	//**** OUTPUT ONLY VARIABLES ****
	//******************************
	var $prorated_adjustment_in_cents;
	var $charge_in_cents;
	var $payment_due_in_cents;
	var $credit_applied_in_cents;

	public function __construct(SimpleXMLElement $product_xml_node = null)
	{
		if ($product_xml_node) {
	    //Load object dynamically and convert SimpleXMLElements into strings
	    foreach($product_xml_node as $key => $element) { 
				$this->$key = (string)$element; 
	    }
		}
	}
}