<?php //$Id: block_admin.php,v 1.100.2.14 2010/02/24 08:56:41 poltawski Exp $

class block_hide_email extends block_base {
	function init() {
		$this->title   = 'Paypal Donate';//get_string('paypal_donate', 'block_paypal_donate');
		$this->version = 2008033000;
	}
    function get_content() {
		// none
    }
}