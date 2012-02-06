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
 * @link       http://twitter.com/#!/deckerweb
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
 * Gravity Forms ShootQ Add-On (free, by pussycatdev)
 *
 * @since 1.1
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-shootq-add-on/shootq.php' ) ) || class_exists( 'GFShootQ' ) ) {

	// Entry at "Add-Ons" level submenu
	$menu_items['gftpaoshootq'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'ShootQ Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_shootq' ),
		'meta'   => array( 'target' => '', 'title' => __( 'ShootQ Feeds', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaoshootq-newfeed'] = array(
		'parent' => $gftpaoshootq,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_shootq&view=edit&id=0' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaoshootq-settings'] = array(
		'parent' => $gftpaoshootq,
		'title'  => __( 'ShootQ Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=ShootQ' ),
		'meta'   => array( 'target' => '', 'title' => __( 'ShootQ Settings', 'gravity-forms-toolbar' ) )
	);

	// Entry at "Extensions" level submenu
	$menu_items['ext-gfshootq'] = array(
		'parent' => $extensions,
		'title'  => __( 'ShootQ Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=ShootQ' ),
		'meta'   => array( 'target' => '', 'title' => __( 'ShootQ Add-On Settings', 'gravity-forms-toolbar' ) )
	);
}  // end-if GF ShootQ


/**
 * Gravity Forms iContact Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.1
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-icontact/icontact.php' ) ) || class_exists( 'GFiContact' ) ) {

	// Entry at "Add-Ons" level submenu
	$menu_items['gftpaoicontact'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'iContact Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_icontact' ),
		'meta'   => array( 'target' => '', 'title' => __( 'iContact Feeds', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaoicontact-newfeed'] = array(
		'parent' => $gftpaoicontact,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_icontact&view=edit&id=0' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaoicontact-settings'] = array(
		'parent' => $gftpaoicontact,
		'title'  => __( 'iContact Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=iContact' ),
		'meta'   => array( 'target' => '', 'title' => __( 'iContact Settings', 'gravity-forms-toolbar' ) )
	);

	// Entry at "Extensions" level submenu
	$menu_items['ext-gficontact'] = array(
		'parent' => $extensions,
		'title'  => __( 'iContact Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=iContact' ),
		'meta'   => array( 'target' => '', 'title' => __( 'iContact Add-On Settings', 'gravity-forms-toolbar' ) )
	);
}  // end-if GF iContact


/**
 * Gravity Forms Mad Mimi Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.1
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-mad-mimi/madmimi.php' ) ) || class_exists( 'GFMadMimi' ) ) {

	// Entry at "Add-Ons" level submenu
	$menu_items['gftpaomadmimi'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Mad Mimi Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_madmimi' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Mad Mimi Feeds', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaomadmimi-newfeed'] = array(
		'parent' => $gftpaomadmimi,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_madmimi&view=edit&id=0' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaomadmimi-settings'] = array(
		'parent' => $gftpaomadmimi,
		'title'  => __( 'Mad Mimi Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Mad+Mimi' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Mad Mimi Settings', 'gravity-forms-toolbar' ) )
	);

	// Entry at "Extensions" level submenu
	$menu_items['ext-gfmadmimi'] = array(
		'parent' => $extensions,
		'title'  => __( 'Mad Mimi Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Mad+Mimi' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Mad Mimi Add-On Settings', 'gravity-forms-toolbar' ) )
	);
}  // end-if GF Mad Mimi


/**
 * Gravity Forms ExactTarget Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.1
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-exacttarget/exacttarget.php' ) ) || class_exists( 'GFExactTarget' ) ) {

	// Entry at "Add-Ons" level submenu
	$menu_items['gftpaoexacttarget'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'ExactTarget Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_exacttarget' ),
		'meta'   => array( 'target' => '', 'title' => __( 'ExactTarget Feeds', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaoexacttarget-newfeed'] = array(
		'parent' => $gftpaoexacttarget,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_exacttarget&view=edit&id=0' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
	);
	$menu_items['gftpaoexacttarget-settings'] = array(
		'parent' => $gftpaoexacttarget,
		'title'  => __( 'ExactTarget Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=ExactTarget' ),
		'meta'   => array( 'target' => '', 'title' => __( 'ExactTarget Settings', 'gravity-forms-toolbar' ) )
	);

	// Entry at "Extensions" level submenu
	$menu_items['ext-gfexacttarget'] = array(
		'parent' => $extensions,
		'title'  => __( 'ExactTarget Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=ExactTarget' ),
		'meta'   => array( 'target' => '', 'title' => __( 'ExactTarget Add-On Settings', 'gravity-forms-toolbar' ) )
	);
}  // end-if GF ExactTarget


/**
 * Placing of "Purchase more official Add-Ons" as very last entry of "Add-On" first-level menu
 *
 * @since 1.0
 * @version 1.1
 */
if ( current_user_can( 'gravityforms_view_addons' ) || current_user_can( 'gravityforms_addon_browser' ) || current_user_can( 'gform_full_access' ) ) {
	$menu_items['gfaddonsinstalled-purchase'] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Purchase more Add-Ons', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_addons' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Purchase more Add-Ons', 'gravity-forms-toolbar' ) )
	);
}  // end-if purchase more add-ons
