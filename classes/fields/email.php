<?php
/**
 * Email field class
 * Extends the text field class
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Field
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       3.0
*/

class NF_Field_Email extends NF_Field_Text {

	/**
	 * @var class
	 * @since 3.0
	 */
	var $class = 'email';

	/**
	 * @var sidebar
	 * @since 3.0
	 */
	var $sidebar = 'user_info';

	/**
	 * Get things started.
	 * Set our nicename.
	 * 
	 * @access public
	 * @since 3.0
	 * @return void
	 */
	public function __construct() {
		$this->nicename = __( 'Email', 'ninja-forms' );	
	}

}