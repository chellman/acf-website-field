<?php
/*
Plugin Name: Advanced Custom Fields: Website Field
Plugin URI: https://github.com/Jeradin/acf-website-field
GitHub Plugin URI: https://github.com/Jeradin/acf-website-field
Description: Website Title field for Advanced Custom Fields
Version: 1.5.9.5
Author: Geet Jacobs
Author URI: http://anagr.am
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


if( is_admin() ) {
	require_once( 'class-plugin-updater.php' );
}




class acf_website_field_plugin
{
	/*
	*  Construct
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function __construct()
	{

		// version 4+
		add_action('acf/register_fields', array($this, 'register_fields'));

		add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_styles' ) );

	}


	/*
	*  register_fields
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function register_fields()
	{
		include_once('website_url.php');
	}


	/**
	 * Registers and enqueues admin-specific styles.
	 */
	public function register_admin_styles() {
		wp_enqueue_style( 'acf-website-field', plugins_url( 'acf-website-field/acf-website-field.css' ) );
	} // end register_admin_styles

}

new acf_website_field_plugin();

?>
