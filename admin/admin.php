<?php
/**
 * Plugin's admin options
 *
 * @package    Gravity Forms Toolbar
 * @subpackage Admin Options
 * @author     Milan Petrovic - Dev4Press
 * @copyright  Copyright 2012, Milan Petrovic - Dev4Press
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://twitter.com/#!/milangd
 *
 * @since 1.2
 * @version 1.1
 */

add_action( 'admin_menu', 'ddw_gftb_admin_menu' );
/**
 * Registrer plugin menu panel.
 *
 * @since 1.2
 * @version 1.1
 */
function ddw_gftb_admin_menu() {
	
	// Set capability for displaying the menu panel
	if ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'members/members.php' ) ) {  // Check for "Members" plugin
		$ddw_gftb_options = 'gravityforms_edit_forms';
	} else {  // Otherwise use GF full access cap
		$ddw_gftb_options = 'gform_full_access';
	}

	// Add the menu panel & options page
	add_options_page( __( 'Gravity Forms Toolbar', 'gravity-forms-toolbar' ), __( 'Gravity Forms Toolbar', 'gravity-forms-toolbar' ), $ddw_gftb_options, 'ddw_gftb_options_page', 'ddw_gftb_options_page' );
}


add_action( 'admin_init', 'ddw_gftb_admin_init' );
/**
 * Registrer settings for the plugin.
 *
 * @since 1.2
 */
function ddw_gftb_admin_init() {
	register_setting( 'ddw_gftb_options', 'ddw_gftb', 'ddw_gftb_options_validate' );
}


/**
 * Validation of the options to save.
 *
 * @since 1.2
 * @version 1.1
 *
 * @param array $input raw options data
 * @return array valid options data
 */
function ddw_gftb_options_validate( $input ) {

	$default = ddw_gftb_default_options();

	if ( !isset( $input['help_and_support'] ) ) {
		$default['help_and_support'] = false;
	}

	if ( !isset( $input['extensions'] ) ) {
		$default['extensions'] = false;
	}

	if ( !isset( $input['forms_details'] ) ) {
		$default['forms_details'] = false;
	}

	if ( !isset( $input['update_notification'] ) ) {
		$default['update_notification'] = false;
	}

	if ( !isset( $input['unread_notification'] ) ) {
		$default['unread_notification'] = false;
	}

	return $default;
}


/**
 * Include form
 *
 * @since 1.2
 */
function ddw_gftb_options_page() {

	include( 'form.php' );
}
