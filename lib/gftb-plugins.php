<?php
/**
 * Display links to active Gravity Forms third-party add-ons/ plugins/ extensions settings' pages
 *
 * @package    Gravity Forms Toolbar
 * @subpackage Plugin/Extension Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright (c) 2012-2014, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL-2.0+
 * @link       http://genesisthemes.de/en/wp-plugins/gravity-forms-toolbar/
 * @link       http://deckerweb.de/twitter
 *
 * @since      1.0.0
 */

/**
 * Exit if accessed directly.
 *
 * @since 1.6.0
 */
if ( ! defined( 'WPINC' ) ) {
	exit( 'Sorry, you are not allowed to access this file directly.' );
}


/**
 * Pronamic iDEAL settings pages (free, by Pronamic)
 *
 * NOTE: Requires at least version 2.6.1 of the add-on plugin!
 *
 * @since   1.0.0
 * @version 1.6.0
 */
if ( class_exists( 'Pronamic_GravityForms_GravityForms' ) ) {

	/** Include code part for Pronamic iDEAL plugin support */
	require_once( GFTB_PLUGIN_DIR . 'lib/gftb-plugins-pronamicideal.php' );

}  // end if Pronamic iDEAL


/**
 * Gravity Forms Stripe Add-On (free, by Naomi C. Bush)
 *
 * @since 1.4.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-stripe/stripe.php' ) ) || class_exists( 'GFStripe' ) )
	&& ( current_user_can( 'gravityforms_stripe' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaostripe' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Stripe Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_stripe' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Stripe Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaostripe-newfeed' ] = array(
		'parent' => $gftpaostripe,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_stripe&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaostripe-settings' ] = array(
		'parent' => $gftpaostripe,
		'title'  => __( 'Stripe Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Stripe' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Stripe Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfstripe' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Stripe Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Stripe' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Stripe Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Stripe


/**
 * Gravity Forms Directory & Addons (free, by Katz Web Services, Inc.)
 *
 * @since 1.0.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-addons/gravity-forms-addons.php' ) ) || class_exists( 'GFDirectory' ) )
	&& ( current_user_can( 'gravityforms_directory' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfd' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Gravity Forms Directory & Addons', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Directory+%26+Addons' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Gravity Forms Directory & Addons', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfdirectory' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Gravity Forms Directory & Addons', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Directory+%26+Addons' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Gravity Forms Directory & Addons', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Directory


/**
 * Gravity Forms Salesforce Add-on (free, by Katz Web Services, Inc.)
 *
 * @since 1.0.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-salesforce/salesforce.php' ) ) || class_exists( 'GFSalesforce' ) )
	&& ( current_user_can( 'gravityforms_salesforce' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfsf' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Gravity Forms Salesforce Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_salesforce' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Gravity Forms Salesforce Add-On', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfsalesforce' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Gravity Forms Salesforce Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_salesforce' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Gravity Forms Salesforce Add-On', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Salesforce


/**
 * Gravity Forms Contact Form 7 Importer (free, by Katz Web Services, Inc.)
 *
 * @since 1.0.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'contact-form-7-gravity-forms/contact-form-7-gravity-forms.php' ) ) || class_exists( 'GFCF7_Import' ) )
	&& ( current_user_can( 'administrator' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfcf7import' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Contact Form 7 Gravity Forms Importer', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gfcf7' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Contact Form 7 Gravity Forms Importer', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF CF7-Importer


/**
 * Gravity Forms ShootQ Add-On (free, by pussycatdev)
 *
 * @since 1.1.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-shootq-add-on/shootq.php' ) ) || class_exists( 'GFShootQ' ) )
	&& ( current_user_can( 'gravityforms_shootq' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaoshootq' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'ShootQ Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_shootq' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'ShootQ Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoshootq-newfeed' ] = array(
		'parent' => $gftpaoshootq,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_shootq&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoshootq-settings' ] = array(
		'parent' => $gftpaoshootq,
		'title'  => __( 'ShootQ Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=ShootQ' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'ShootQ Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfshootq' ] = array(
		'parent' => $extensions,
		'title'  => __( 'ShootQ Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=ShootQ' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'ShootQ Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF ShootQ


/**
 * Gravity Forms Constant Contact Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.4.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-constant-contact/constantcontact.php' ) ) || class_exists( 'GFConstantContact' ) )
	&& ( current_user_can( 'gravityforms_constantcontact' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaoconstantcontact' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Constant Contact Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_constantcontact' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Constant Contact Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoconstantcontact-newfeed' ] = array(
		'parent' => $gftpaoconstantcontact,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_constantcontact&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoconstantcontact-settings' ] = array(
		'parent' => $gftpaoconstantcontact,
		'title'  => __( 'Constant Contact Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Constant+Contact' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Constant Contact Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfconstantcontact' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Constant Contact Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Constant+Contact' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Constant Contact Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF iContact


/**
 * Gravity Forms iContact Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.1.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-icontact/icontact.php' ) ) || class_exists( 'GFiContact' ) )
	&& ( current_user_can( 'gravityforms_icontact' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaoicontact' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'iContact Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_icontact' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'iContact Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoicontact-newfeed' ] = array(
		'parent' => $gftpaoicontact,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_icontact&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoicontact-settings' ] = array(
		'parent' => $gftpaoicontact,
		'title'  => __( 'iContact Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=iContact' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'iContact Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gficontact' ] = array(
		'parent' => $extensions,
		'title'  => __( 'iContact Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=iContact' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'iContact Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF iContact


/**
 * Gravity Forms Mad Mimi Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.1.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-mad-mimi/madmimi.php' ) ) || class_exists( 'GFMadMimi' ) )
	&& ( current_user_can( 'gravityforms_madmimi' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaomadmimi' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Mad Mimi Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_madmimi' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Mad Mimi Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaomadmimi-newfeed' ] = array(
		'parent' => $gftpaomadmimi,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_madmimi&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaomadmimi-settings' ] = array(
		'parent' => $gftpaomadmimi,
		'title'  => __( 'Mad Mimi Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Mad+Mimi' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Mad Mimi Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfmadmimi' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Mad Mimi Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Mad+Mimi' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Mad Mimi Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Mad Mimi


/**
 * Gravity Forms ExactTarget Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.1.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-exacttarget/exacttarget.php' ) ) || class_exists( 'GFExactTarget' ) )
	&& ( current_user_can( 'gravityforms_exacttarget' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaoexacttarget' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'ExactTarget Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_exacttarget' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'ExactTarget Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoexacttarget-newfeed' ] = array(
		'parent' => $gftpaoexacttarget,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_exacttarget&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoexacttarget-settings' ] = array(
		'parent' => $gftpaoexacttarget,
		'title'  => __( 'ExactTarget Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=ExactTarget' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'ExactTarget Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfexacttarget' ] = array(
		'parent' => $extensions,
		'title'  => __( 'ExactTarget Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=ExactTarget' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'ExactTarget Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF ExactTarget


/**
 * Gravity Forms Infusionsoft Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.5.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'infusionsoft/infusionsoft.php' ) ) || class_exists( 'GFInfusionsoft' ) )
	&& ( current_user_can( 'gravityforms_infusionsoft' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaoinfusionsoft' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Infusionsoft Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_infusionsoft' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Infusionsoft Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoinfusionsoft-newfeed' ] = array(
		'parent' => $gftpaoinfusionsoft,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_infusionsoft&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoinfusionsoft-settings' ] = array(
		'parent' => $gftpaoinfusionsoft,
		'title'  => __( 'Infusionsoft Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Infusionsoft' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Infusionsoft Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfinfusionsoft' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Infusionsoft Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Infusionsoft' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Infusionsoft Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Infusionsoft


/**
 * Gravity Forms YMLP Add-On (free, by Katz Web Services, Inc.)
 *
 * @since 1.5.1
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'ymlp/ymlp.php' ) ) || class_exists( 'GFYMLP' ) )
	&& ( current_user_can( 'gravityforms_ymlp' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaoymlp' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'YMLP Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_ymlp' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'YMLP Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoymlp-newfeed' ] = array(
		'parent' => $gftpaoymlp,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_ymlp&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoymlp-settings' ] = array(
		'parent' => $gftpaoymlp,
		'title'  => __( 'YMLP Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=YMLP' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'YMLP Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfymlp' ] = array(
		'parent' => $extensions,
		'title'  => __( 'YMLP Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=YMLP' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'YMLP Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF YMLP


/**
 * Gravity Forms Blue Pay Add-On (free, by David Cramer)
 *
 * @since 1.6.0
 */
if ( class_exists( 'GFBluePay' ) && current_user_can( 'gravityforms_blue_pay' ) ) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaobluepay' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Blue Pay Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_blue_pay' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Blue Pay Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaobluepay-newfeed' ] = array(
		'parent' => $gftpaobluepay,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_blue_pay&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaobluepay-settings' ] = array(
		'parent' => $gftpaobluepay,
		'title'  => __( 'Blue Pay Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=BluePay' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Blue Pay Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfbluepay' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Blue Pay Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=BluePay' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Blue Pay Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Blue Pay


/**
 * Gravity Forms Quantiy Limits (free, by Ben Hays)
 *
 * @since 1.6.0
 */
if ( class_exists( 'GFLimit' ) && current_user_can( 'gf_limit' ) ) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaoqlimit' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Quantity Limit Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_limit' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Quantity Limit Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaoqlimit-newfeed' ] = array(
		'parent' => $gftpaoqlimit,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_limit&view=edit&id=0' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Quantiy Limits


/**
 * Gravity Forms DPS PxPay Add-On (free, by WebAware)
 *
 * @since 1.6.0
 */
if ( defined( 'GFDPSPXPAY_PLUGIN_VERSION' )
	&& ( current_user_can( 'manage_options' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaodpspxpay' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'DPS PxPay Feeds', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'edit.php?post_type=gfdpspxpay_feed' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'DPS PxPay Feeds', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaodpspxpay-newfeed' ] = array(
		'parent' => $gftpaodpspxpay,
		'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'post-new.php?post_type=gfdpspxpay_feed' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'gftpaodpspxpay-settings' ] = array(
		'parent' => $gftpaodpspxpay,
		'title'  => __( 'DPS PxPay Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gfdpspxpay-options' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'DPS PxPay Settings', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfdpspxpay' ] = array(
		'parent' => $extensions,
		'title'  => __( 'DPS PxPay Add-On Settings', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gfdpspxpay-options' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'DPS PxPay Add-On Settings', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF DPS PxPay


/**
 * Gravity to Solve360 (free, by Steve Barnett)
 *
 * @since 1.4.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-to-solve360/gravity-to-solve360.php' ) ) || function_exists( 'gts360' ) ) && current_user_can( 'manage_options' ) ) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'extgfsolve360' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Gravity to Solve360', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'tools.php?page=gravity-to-solve360' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Gravity to Solve360 Export', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

	$menu_items[ 'extgfsolve360-options' ] = array(
		'parent' => $extgfsolve360,
		'title'  => __( 'Options', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=gravity-to-solve360-options' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Options', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Solve360


/**
 * Gravity Forms Survey Funnel Add-On (free, by Pronamic)
 *
 * @since 1.5.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-survey-funnel/gravityforms-surveyfunnel.php' ) ) || class_exists( 'Gravity_Forms_Survey_Funnel' ) ) && current_user_can( 'manage_options' ) ) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfsf' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Survey Funnel Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=gravityforms-surveyfunnel-survey-settings' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Survey Funnel Add-On', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfsurveyfunnel' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Survey Funnel Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=gravityforms-surveyfunnel-survey-settings' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Survey Funnel Add-On', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Survey Funnel


/**
 * Gravity Forms HubSpot Add-On (free, by Dan Zappone)
 *
 * @since 1.4.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'hubspot-for-gravity-forms/gf-hubspot.php' ) ) || class_exists( 'GFHubspot' ) )
	&& ( current_user_can( 'gravityforms_hubspot' ) || current_user_can( 'administrator' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfhs' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'HubSpot Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_hubspot' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'HubSpot Add-On', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfhubspot' ] = array(
		'parent' => $extensions,
		'title'  => __( 'HubSpot Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_hubspot' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'HubSpot Add-On', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF HubSpot


/**
 * Gravity Forms Fat Zebra Add-On (free, by Matthew Savage)
 *
 * @since 1.5.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravityforms-fatzebra/fatzebra.php' ) ) || defined( 'GRAVITYFORMS_FATZEBRA_PATH' ) ) && ( current_user_can( 'administrator' ) || current_user_can( 'gform_full_access' ) ) ) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogffatzebra' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Fat Zebra Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Fat+Zebra+%28Payments%29' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Fat Zebra Add-On', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gffatzebra' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Fat Zebra Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Fat+Zebra+%28Payments%29' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Fat Zebra Add-On', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Fat Zebra


/**
 * Gravity Forms CapsuleCRM Add-On (free, by Alinea.im)
 *
 * @since 1.4.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-capsulecrm-add-on/capsulecrm.php' ) ) || class_exists( 'GFCapsuleCRM' ) )
	&& ( current_user_can( 'gravityforms_capsulecrm' ) || current_user_can( 'administrator' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfcapsule' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'CapsuleCRM Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_capsulecrm' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'CapsuleCRM Add-On', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfcapsule' ] = array(
		'parent' => $extensions,
		'title'  => __( 'CapsuleCRM Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_capsulecrm' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'CapsuleCRM Add-On', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF CapsuleCRM


/**
 * GravityForms eWAY (free, by WebAware)
 *
 * @since 1.4.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravityforms-eway/gravityforms-eway.php' ) ) || defined( 'GFEWAY_PLUGIN_ROOT' ) ) && current_user_can( 'manage_options' ) ) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfeway' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'eWAY Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gfeway-options' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'eWAY Add-On', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-gfeway' ] = array(
		'parent' => $extensions,
		'title'  => __( 'eWAY Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gfeway-options' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'eWAY Add-On', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF eWAY


/**
 * PixCaptcha Image Captcha for Gravity Forms (free, by Picatcha, Inc.)
 *
 * @since 1.4.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'picatcha-for-gravity-forms/picatcha_gforms.php' ) ) || function_exists( 'add_pixcaptcha_field' ) )
	&& ( current_user_can( 'edit_posts' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-picatchagf' ] = array(
		'parent' => $extensions,
		'title'  => __( 'PixCaptcha Image Captcha', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=picatcha_submenu' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'PixCaptcha Image Captcha', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Picatcha


/**
 * Gravity Forms SMS Notifications (free, by Mediaburst)
 *
 * @since 1.4.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-sms-notifications/gravityforms-sms.php' ) ) || class_exists( 'GravityFormsSMS' ) )
	&& ( current_user_can( 'manage_options' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-picatchagf' ] = array(
		'parent' => $extensions,
		'title'  => __( 'SMS Notifications (Mediaburst)', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=sms_notifications' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'SMS Notifications by Mediaburst', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF SMS Notifications


/**
 * Gravity Forms Connect to Google Calendar™ (premium, by Eugen Oprea via CodeCanyon Marketplace)
 *
 * @since 1.6.0
 */
if ( class_exists( 'GFGCal' )
	&& ( current_user_can( 'manage_options' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfgcal' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Google Calendar Connect', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_settings&addon=Google+Calendar' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Google Calendar Connect', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Connect to Google Calendar™


/**
 * Gravity Forms Survey Results
 *    (free, by Daniel Grundel (dgrundel) and Mahmoud Kassassir (mkassassir), Web Presence Partners -  via GitHub)
 *
 * @since 1.6.0
 */
if ( function_exists( 'gf_survey_results_display' )
	&& ( current_user_can( 'edit_posts' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfstatefulforms' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Survey Results', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_survey_results' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Survey Results', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Survey Results


/**
 * Gravity Forms Conditional Notifications Add-On (free, by Gennady Kovshenin via GitHub)
 *
 * @since 1.6.0
 */
if ( class_exists( 'GFConditionalNotifications' ) && current_user_can( 'gform_full_access' ) ) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfconditionalnotifications' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Conditional Notifications', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_conditional_notifications_ui' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Conditional Notifications Settings', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Conditional Notifications


/**
 * Gravity Forms Saved Forms Add-On (free, by Gennady Kovshenin via GitHub)
 *
 * @since 1.6.0
 */
if ( class_exists( 'GFStatefulForms' )
	&& ( current_user_can( 'gravityforms_view_entries' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfstatefulforms' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Pending/ Completed Entries', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_pending_completed_entries' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Pending/ Completed Entries Settings', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Saved Forms


/**
 * Gravity Forms Mass Import (free, by Aryan Duntley)
 *
 * @since 1.6.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'gravity-forms-mass-import/gravity-forms-mass-import.php' ) ) || function_exists( 'get_field_list_massimport' ) )
	&& ( current_user_can( 'activate_plugins' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Import & Export" level submenu */
	$menu_items[ 'gf-entries-massimport' ] = array(
		'parent' => $gfimportexport,
		'title'  => __( 'Entries Mass Import', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_import_entries' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Entries Mass Import (via Add-On)', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

	/** Entry at "Add-Ons" level submenu */
	$menu_items[ 'gftpaogfmassimport' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Entries Mass Import', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_import_entries' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Entries Mass Import (via Add-On)', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Mass Import


/**
 * Are You A Human (free, by Are You A Human)
 *
 * @since 1.6.0
 */
if ( defined( 'AYAH_WEB_SERVICE_HOST' )
	&& ( current_user_can( 'manage_options' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-areyouahuman' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Are You A Human', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=are-you-a-human' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Are You A Human Settings (anti spam protection add-on)', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

}  // end if Are You A Human


/**
 * Aviary Editor Addon For Gravity Forms (free, by Leon Kiley - NetherWorks, LLC)
 *
 * @since 1.6.0
 */
if ( class_exists( 'GFAviaryEditor' )
	&& ( current_user_can( 'edit_posts' ) || current_user_can( 'gform_full_access' ) )
) {

	/** Entry at "Extensions" level submenu */
	$menu_items[ 'ext-aviaryeditor' ] = array(
		'parent' => $extensions,
		'title'  => __( 'Aviary Editor Add-On', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_aviary_options' ),
		'meta'   => array(
			'target' => '',
			'title'  => _x( 'Aviary Editor Add-On', 'Translators: For the tooltip', 'gravity-forms-toolbar' )
		)
	);

}  // end if GF Aviary Editor Addon


/**
 * Placing of "Purchase more official Add-Ons" as very last entry of "Add-On" first-level menu
 *
 * @since 1.0.0
 */
if ( current_user_can( 'gravityforms_view_addons' ) || current_user_can( 'gravityforms_addon_browser' ) || current_user_can( 'gform_full_access' ) ) {

	$menu_items[ 'gfaddonsinstalled-purchase' ] = array(
		'parent' => $gfaddonsinstalled,
		'title'  => __( 'Purchase more Add-Ons', 'gravity-forms-toolbar' ),
		'href'   => admin_url( 'admin.php?page=gf_addons' ),
		'meta'   => array(
			'target' => '',
			'title'  => __( 'Purchase more Add-Ons', 'gravity-forms-toolbar' )
		)
	);

}  // end if purchase more add-ons