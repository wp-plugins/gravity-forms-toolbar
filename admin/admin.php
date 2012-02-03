<?php
/**
 * Plugin's admin options
 *
 * @package    Gravity Forms Toolbar
 * @subpackage Admin Options
 * @author     Milan Petrovic - Dev4Press
 * @copyright  Copyright 2012, Milan Petrovic - Dev4Press
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://twitter.com/#!/dev4press
 *
 * @since 1.2
 * @version 1.0
 */

add_action( 'admin_menu', 'ddw_gtfb_admin_menu' );
/**
 * Registrer plugin menu panel.
 *
 * @since 1.2
 */
function ddw_gtfb_admin_menu() {
	add_options_page( __( 'Gravity Forms Toolbar', 'gravity-forms-toolbar' ), __( 'Gravity Forms Toolbar', 'gravity-forms-toolbar' ), 'gform_full_access', 'ddw_gtfb_options_page', 'ddw_gtfb_options_page' );
}


add_action( 'admin_init', 'ddw_gtfb_admin_init' );
/**
 * Registrer settings for the plugin.
 *
 * @since 1.2
 */
function ddw_gtfb_admin_init() {
	register_setting( 'ddw_gtfb_options', 'ddw_gtfb', 'ddw_gtfb_options_validate' );
}


/**
 * Validation of the options to save.
 *
 * @since 1.2
 *
 * @param array $input raw options data
 * @return array valid options data
 */
function ddw_gtfb_options_validate( $input ) {

	$default = ddw_gtfb_default_options();

	if ( !isset( $input['help_and_support'] ) ) {
		$default['help_and_support'] = false;
	}

	if ( !isset( $input['extensions'] ) ) {
		$default['extensions'] = false;
	}

	return $default;
}


/**
 * Include form
 *
 * @since 1.2
 */
function ddw_gtfb_options_page() {

	include( 'form.php' );
}
