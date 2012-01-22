<?php
/**
 * Display links to active Gravity Forms third-party add-ons/ plugins/ extensions settings' pages
 *
 * @package    Gravity Forms Toolbar
 * @subpackage Plugin/Extension Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/gravity-forms-toolbar/
 *
 * @since 1.0
 * @version 1.0
 */

/**
 * Pronamic iDEAL settings pages (free, by Pronamic)
 *
 * @since 1.0
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'pronamic-ideal/pronamic-ideal.php' ) ) || class_exists( 'Pronamic_IDeal_IDeal' ) ) {

	// Entry at "Add-Ons" level submenu
	$menu_items['gftpaopideal'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'iDEAL Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_pronamic_ideal' ),
		'meta'   => array( 'target' => '', 'title' => __( 'iDEAL Feeds', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaopideal-newfeed'] = array(
		'parent' => $gftpaopideal,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_pronamic_ideal&view=edit' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaopideal-settings'] = array(
		'parent' => $gftpaopideal,
		'title'  => __( 'Pronamic iDEAL Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=iDEAL' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Pronamic iDEAL Settings', 'gravity-forms-toolbar' ) )
	);

	// Entries at "Extensions" level submenu
	$menu_items['extpideal'] = array(
		'parent' => $extensions,
		'title'  => __( 'Pronamic iDEAL Payment Gateway', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Pronamic iDEAL Payment Gateway', 'gravity-forms-toolbar' ) )
	);
	$menu_items['ext-pideal-feeds'] = array(
		'parent' => $extpideal,
		'title'  => __( 'iDEAL Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_pronamic_ideal' ),
		'meta'   => array( 'target' => '', 'title' => __( 'iDEAL Feeds', 'gravity-forms-toolbar' ) )
	);
	$menu_items['ext-pideal-newfeed'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_pronamic_ideal&view=edit' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
	);
	$menu_items['ext-pideal-gfsettings'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Pronamic iDEAL Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=iDEAL' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Pronamic iDEAL Settings', 'gravity-forms-toolbar' ) )
	);
	$menu_items['ext-pideal-payments'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Payments', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_payments' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Payments', 'gravity-forms-toolbar' ) )
	);
	$menu_items['ext-pideal-settings'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Settings', 'gravity-forms-toolbar' ) )
	);
	$menu_items['ext-pideal-pages-generator'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Pages Generator', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_pages_generator' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Pages Generator', 'gravity-forms-toolbar' ) )
	);
	$menu_items['ext-pideal-variants'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Variants', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_variants' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Variants', 'gravity-forms-toolbar' ) )
	);
	$menu_items['ext-pideal-documentation'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Pronamic iDEAL Documentation', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_documentation' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Pronamic iDEAL Documentation', 'gravity-forms-toolbar' ) )
	);

}  // end-if Pronamic iDEAL


/**
 * Gravity Forms Directory & Addons (free, by Katz Web Services, Inc.)
 *
 * @since 1.0
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-addons/gravity-forms-addons.php' ) ) || class_exists( 'GFDirectory' ) ) {

	// Entry at "Add-Ons" level submenu
	$menu_items['gftpaogfd'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Gravity Forms Directory & Addons', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Directory+%26+Addons' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Gravity Forms Directory & Addons', 'gravity-forms-toolbar' ) )
	);

	// Entry at "Extensions" level submenu
	$menu_items['ext-gfdirectory'] = array(
		'parent' => $extensions,
		'title'  => __( 'Gravity Forms Directory & Addons', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Directory+%26+Addons' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Gravity Forms Directory & Addons', 'gravity-forms-toolbar' ) )
	);
}  // end-if GF Directory


/**
 * Gravity Forms Salesforce Add-on (free, by Katz Web Services, Inc.)
 *
 * @since 1.0
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-salesforce/salesforce.php' ) ) || class_exists( 'GFSalesforce' ) ) {

	// Entry at "Add-Ons" level submenu
	$menu_items['gftpaogfsf'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Gravity Forms Salesforce Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_salesforce' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Gravity Forms Salesforce Add-On', 'gravity-forms-toolbar' ) )
	);

	// Entry at "Extensions" level submenu
	$menu_items['ext-gfsalesforce'] = array(
		'parent' => $extensions,
		'title'  => __( 'Gravity Forms Salesforce Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_salesforce' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Gravity Forms Salesforce Add-On', 'gravity-forms-toolbar' ) )
	);
}  // end-if GF Salesforce


/**
 * Gravity Forms Contact Form 7 Importer (free, by Katz Web Services, Inc.)
 *
 * @since 1.0
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'contact-form-7-gravity-forms/contact-form-7-gravity-forms.php' ) ) || class_exists( 'GFCF7_Import' ) ) {

	// Entry at "Extensions" level submenu
	$menu_items['ext-gfcf7import'] = array(
		'parent' => $extensions,
		'title'  => __( 'Contact Form 7 Gravity Forms Importer', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gfcf7' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Contact Form 7 Gravity Forms Importer', 'gravity-forms-toolbar' ) )
	);
}  // end-if GF CF7-Importer


/**
 * Placing of "Purchase more official Add-Ons" as very last entry of "Add-On" first-level menu
 *
 * @since 1.0
 */
if ( current_user_can( 'gravityforms_view_addons' ) || current_user_can( 'gform_full_access' ) ) {
	$menu_items['gfaddonsinstalled-purchase'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Purchase more Add-Ons', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_addons' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Purchase more Add-Ons', 'gravity-forms-toolbar' ) )
	);
}  // end-if purchase more add-ons
