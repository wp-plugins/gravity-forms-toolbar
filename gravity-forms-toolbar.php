<?php 
/**
 * Main plugin file. This plugin adds useful admin links and resources for Gravity Forms to the WordPress Toolbar / Admin Bar.
 *
 * @package   Gravity Forms Toolbar
 * @author    David Decker
 * @link      http://twitter.com/#!/deckerweb
 * @author    Milan Petrovic
 * @link      http://twitter.com/#!/dev4press
 * @copyright Copyright 2012, David Decker - DECKERWEB
 *
 * @credits   Inspired and based on the plugin "WooThemes Admin Bar Addition" by Remkus de Vries @defries.
 * @link      http://remkusdevries.com/
 * @link      http://twitter.com/#!/defries
 *
 * Plugin Name: Gravity Forms Toolbar
 * Plugin URI: http://genesisthemes.de/en/wp-plugins/gravity-forms-toolbar/
 * Description: This plugin adds useful admin links and resources for Gravity Forms to the WordPress Toolbar / Admin Bar.
 * Version: 1.2
 * Author: David Decker - DECKERWEB / Milan Petrovic - Dev4Press
 * Author URI: http://deckerweb.de/
 * License: GPLv2
 * Text Domain: gravity-forms-toolbar
 * Domain Path: /languages/
 */

/**
 * Setting constants
 *
 * @since 1.0
 */
define( 'GFTB_PLUGIN_BASEDIR', dirname( plugin_basename( __FILE__ ) ) );


/**
 * Get default plugin options.
 *
 * @since 1.2
 *
 * @return array 
 */
function ddw_gtfb_default_options() {
	return array(
		'help_and_support' => true,
		'extensions' => true,
		'forms_details' => true
	);
}


/**
 * Get current plugin options.
 *
 * @since 1.2
 *
 * @return array 
 */
function ddw_gtfb_get_options() {
	$from_db = get_option( 'ddw_gtfb' );
	$default = ddw_gtfb_default_options();
	return wp_parse_args( $from_db, $default );
}


/**
 * Include admin settings
 * 
 * @since 1.2
 */
if ( is_admin() ) {
    require_once( 'admin/admin.php' );
}


add_action( 'init', 'ddw_gftb_init' );
/**
 * Load the text domain for translation of the plugin
 * 
 * @since 1.0
 */
function ddw_gftb_init() {

	load_plugin_textdomain( 'gravity-forms-toolbar', false, GFTB_PLUGIN_BASEDIR . '/languages/' );
}


add_filter( 'plugin_row_meta', 'ddw_gftb_plugin_links', 10, 2 );
/**
 * Add various support links to plugin page
 *
 * @since 1.0
 */
function ddw_gftb_plugin_links( $gftb_links, $gftb_file ) {

	if ( !current_user_can( 'install_plugins' ) )
		return $gftb_links;

	if ( $gftb_file == GFTB_PLUGIN_BASEDIR . '/gravity-forms-toolbar.php' ) {
		$gftb_links[] = '<a href="http://wordpress.org/extend/plugins/gravity-forms-toolbar/faq/" target="_new" title="' . __( 'FAQ', 'gravity-forms-toolbar' ) . '">' . __( 'FAQ', 'gravity-forms-toolbar' ) . '</a>';
		$gftb_links[] = '<a href="http://wordpress.org/tags/gravity-forms-toolbar?forum_id=10" target="_new" title="' . __( 'Support', 'gravity-forms-toolbar' ) . '">' . __( 'Support', 'gravity-forms-toolbar' ) . '</a>';
		$gftb_links[] = '<a href="' . __( 'http://genesisthemes.de/en/donate/', 'gravity-forms-toolbar' ) . '" target="_new" title="' . __( 'Donate', 'gravity-forms-toolbar' ) . '">' . __( 'Donate', 'gravity-forms-toolbar' ) . '</a>';
	}

	return $gftb_links;
}


add_action( 'admin_bar_menu', 'ddw_gftb_admin_bar_menu', 98 );
/**
 * Add new menu items to the WP Toolbar / Admin Bar.
 * 
 * @since 1.0
 * @version 1.1
 *
 * @global mixed $wp_admin_bar 
 */
function ddw_gftb_admin_bar_menu() {

	global $wp_admin_bar;

        $options = ddw_gtfb_get_options();
        $forms = array();
        $count = 0;

        if ( class_exists( 'RGForms' ) && $options['forms_details'] && current_user_can( 'gform_full_access' ) ) {
		$forms = RGFormsModel::get_form_summary();
        }

	// Set unique prefix
	$prefix = 'ddw-gravityforms-';
	
	// Create parent menu item references
	$gravitybar = $prefix . 'toolbar';		// root level
	$gfsupport = $prefix . 'gfsupport';			// sub level: support
	$gfdocs = $prefix . 'gfdocs';				// sub level: documentation
	$gffaq = $prefix . 'gffaq';				// sub level: faq
	$gfsites = $prefix . 'gfsites';				// sub level: gf websites
	$gfsettings = $prefix . 'gfsettings';			// sub level: main settings
	$gfforms = $prefix . 'gfforms';				// sub level: forms
	$gfentries = $prefix . 'gfentries';			// sub level: entries
	$gfimportexport = $prefix . 'gfimportexport';		// sub level: import/export
	$gfaddonsinstalled = $prefix . 'gfaddonsinstalled';	// sub level: add-ons (dummy)
		$gfaoaweber = $prefix . 'gfaoaweber';				// third level add-on: aweber
		$gfaocampaignmonitor = $prefix . 'gfaocampaignmonitor';		// third level add-on: campaign monitor
		$gfaofreshbooks = $prefix . 'gfaofreshbooks';			// third level add-on: freshbooks
		$gfaomailchimp = $prefix . 'gfaomailchimp';			// third level add-on: mailchimp
		$gfaopaypal = $prefix . 'gfaopaypal';				// third level add-on: payal
		$gfaotwilio = $prefix . 'gfaotwilio';				// third level add-on: twilio
		$gfaouserreg = $prefix . 'gfaouserreg';				// third level add-on: user reg.
		$gftpaopideal = $prefix . 'gftpaopideal';			// third level third-party add-on: pronamic ideal
		$gftpaoshootq = $prefix . 'gftpaoshootq';			// third level third-party add-on: shootq
		$gftpaoicontact = $prefix . 'gftpaoicontact';			// third level third-party add-on: icontact
		$gftpaomadmimi = $prefix . 'gftpaomadmimi';			// third level third-party add-on: madmimi
		$gftpaoexacttarget = $prefix . 'gftpaoexacttarget';		// third level third-party add-on: exacttarget
	$extensions = $prefix . 'extensions';			// sub level: extensions (very last main entry)
		$extpideal = $prefix . 'extpideal';				// third level third-party add-on: pronamic ideal

        $menu_items = array();

        if ( $options['help_and_support']) {
            // Display these items also when Gravity Forms plugin is not installed
            $menu_items_help = array(
                    'gfsupport' => array(
                            'parent' => $gravitybar,
                            'title'  => __( 'Support Forums', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/forums/',
                            'meta'   => array( 'title' => __( 'Support Forums', 'gravity-forms-toolbar' ) )
                    ),
                    'gfsearch' => array(
                            'parent' => $gfsupport,
                            'title'  => __( 'Advanced Forum Search', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/forums/search.php?q=',
                            'meta'   => array( 'title' => __( 'Advanced Forum Search', 'gravity-forms-toolbar' ) )
                    ),
                    /**
                    * Here 2 more items hook in (parent = $gfsupport) - we have to move them to end
                    * to be able to run conditional queries and changing their position
                    *
                    * @since 1.1
                    */
                    'gfdocs' => array(
                            'parent' => $gravitybar,
                            'title'  => __( 'Documentation', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/documentation/',
                            'meta'   => array( 'title' => __( 'Documentation', 'gravity-forms-toolbar' ) )
                    ),
                    'gfdocs-css' => array(
                            'parent' => $gfdocs,
                            'title'  => __( 'Visual CSS Guide', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/gravity-forms-css-visual-guide/',
                            'meta'   => array( 'title' => __( 'Visual CSS Guide', 'gravity-forms-toolbar' ) )
                    ),
                    'gfdocs-css-targeting' => array(
                            'parent' => $gfdocs,
                            'title'  => __( 'CSS: Targeting Specific Elements', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.rocketgenius.com/gravity-forms-css-targeting-specific-elements/',
                            'meta'   => array( 'title' => __( 'CSS: Targeting Specific Elements', 'gravity-forms-toolbar' ) )
                    ),
                    'gfdocs-plugin-cssselector' => array(
                            'parent' => $gfdocs,
                            'title'  => __( 'CSS Plugin: CSS Ready Class Selector', 'gravity-forms-toolbar' ),
                            'href'   => 'http://wordpress.org/extend/plugins/gravity-forms-css-ready-selector/',
                            'meta'   => array( 'title' => __( 'CSS Plugin: CSS Ready Class Selector', 'gravity-forms-toolbar' ) )
                    ),
                    'gfdocs-eventscalendar' => array(
                            'parent' => $gfdocs,
                            'title'  => __( 'Gravity Forms + Events Calendar Submissions (creativeslice.com)', 'gravity-forms-toolbar' ),
                            'href'   => 'http://creativeslice.com/tutorials/gravity-forms-events-calendar-submissions/',
                            'meta'   => array( 'title' => __( 'Gravity Forms + Events Calendar Submissions (creativeslice.com)', 'gravity-forms-toolbar' ) )
                    ),
                    'gfdocs-tutorials-snippets' => array(
                            'parent' => $gfdocs,
                            'title'  => __( 'Dev Tutorials &amp; Code Snippets (wpsmith.net)', 'gravity-forms-toolbar' ),
                            'href'   => 'http://wpsmith.net/tag/gravity-forms/',
                            'meta'   => array( 'title' => __( 'Dev Tutorials &amp; Code Snippets (wpsmith.net)', 'gravity-forms-toolbar' ) )
                    ),
                    'gffaq' => array(
                            'parent' => $gravitybar,
                            'title'  => __( 'FAQ', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/frequently-asked-questions/',
                            'meta'   => array( 'title' => __( 'FAQ', 'gravity-forms-toolbar' ) )
                    ),
                    'gffaq-installation' => array(
                            'parent' => $gffaq,
                            'title'  => __( 'Installation', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/frequently-asked-questions/faq-installation/',
                            'meta'   => array( 'title' => __( 'Installation', 'gravity-forms-toolbar' ) )
                    ),
                    'gffaq-usinggf' => array(
                            'parent' => $gffaq,
                            'title'  => __( 'Using Gravity Forms', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/frequently-asked-questions/faq-using-gravity-forms/',
                            'meta'   => array( 'title' => __( 'Using Gravity Forms', 'gravity-forms-toolbar' ) )
                    ),
                    'gffaq-format' => array(
                            'parent' => $gffaq,
                            'title'  => __( 'Formatting &amp; Styling', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/frequently-asked-questions/faq-styling-formatting/',
                            'meta'   => array( 'title' => __( 'Formatting &amp; Styling', 'gravity-forms-toolbar' ) )
                    ),
                    'gffaq-notifications' => array(
                            'parent' => $gffaq,
                            'title'  => __( 'Notifications', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/frequently-asked-questions/faq-notifications/',
                            'meta'   => array( 'title' => __( 'Notifications', 'gravity-forms-toolbar' ) )
                    ),
                    'gffaq-general' => array(
                            'parent' => $gffaq,
                            'title'  => __( 'General Questions', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/frequently-asked-questions/faq-general-questions/',
                            'meta'   => array( 'title' => __( 'General Questions', 'gravity-forms-toolbar' ) )
                    ),
                    'gfsites' => array(
                            'parent' => $gravitybar,
                            'title'  => __( 'Gravity Forms HQ', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityforms.com/',
                            'meta'   => array( 'title' => __( 'Gravity Forms HQ', 'gravity-forms-toolbar' ) )
                    ),
                    'gffeatures' => array(
                            'parent' => $gfsites,
                            'title'  => __( 'Feature List & Demonstration', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityforms.com/features/form-builder/',
                            'meta'   => array( 'title' => __( 'Feature List & Demonstration', 'gravity-forms-toolbar' ) )
                    ),
                    'gfblog' => array(
                            'parent' => $gfsites,
                            'title'  => __( 'Official Blog', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityhelp.com/',
                            'meta'   => array( 'title' => __( 'Official Blog', 'gravity-forms-toolbar' ) )
                    ),
                    'gfaddons-web' => array(
                            'parent' => $gfsites,
                            'title'  => __( 'Official Add-Ons Info', 'gravity-forms-toolbar' ),
                            'href'   => 'http://www.gravityforms.com/add-ons/',
                            'meta'   => array( 'title' => __( 'Official Add-Ons Info', 'gravity-forms-toolbar' ) )
                    ),
                    'gfplugins' => array(
                            'parent' => $gfsites,
                            'title'  => __( 'More free plugins/extensions at WP.org', 'gravity-forms-toolbar' ),
                            'href'   => 'http://wordpress.org/extend/plugins/search.php?q=gravity+forms',
                            'meta'   => array( 'title' => __( 'More free plugins/extensions at WP.org', 'gravity-forms-toolbar' ) )
                    ),
            );

            $menu_items = $menu_items_help;
        }

	/**
	 * Display these support links only for users who can view Gravity Forms Settings
	 * Hook in as children of "Support" entry
	 *
	 * @since 1.1
	 */
	if ( current_user_can( 'gravityforms_view_settings' ) || current_user_can( 'gform_full_access' ) ) {
		// User profile at Gravity Help
		$menu_items['gfuprofile'] = array(
			'parent' => $gfsupport,
			'title'  => __( 'Your User Profile at Gravity Help', 'gravity-forms-toolbar' ),
			'href'   => 'http://www.gravityhelp.com/forums/profile/',
			'meta'   => array( 'title' => __( 'Your User Profile at Gravity Help', 'gravity-forms-toolbar' ) )
		);
		// Priority support at Gravity Help
		$menu_items['gfpriority'] = array(
			'parent' => $gfsupport,
			'title'  => __( 'Priority Support (Dev License Only)', 'gravity-forms-toolbar' ),
			'href'   => 'http://www.gravityhelp.com/priority-support/',
			'meta'   => array( 'title' => __( 'Priority Support (Dev License Only)', 'gravity-forms-toolbar' ) )
		);
	}

	// Display links to language packs only for these locales: de_DE, de_AT, de_CH, de_LU
	if ( get_locale() == 'de_DE' || get_locale() == 'de_AT' || get_locale() == 'de_CH' || get_locale() == 'de_LU' ) {
		$menu_items['gf-languages-de'] = array(
			'parent' => $gravitybar,
			'title'  => __( 'German language files', 'gravity-forms-toolbar' ),
			'href'   => 'http://deckerweb.de/material/sprachdateien/gravityforms-und-addons/',
			'meta'   => array( 'title' => __( 'German language files', 'gravity-forms-toolbar' ) )
		);
	}

	// Display links to language plugin only for this locale: nl, nl_NL - and when NL plugin not active
	if ( ( get_locale() == 'nl' || get_locale() == 'nl_NL' ) && !is_plugin_active( 'gravityforms-nl/gravityforms-nl.php' ) ) {
		$menu_items['languages-nl'] = array(
			'parent' => $gravitybar,
			'title'  => __( 'Dutch language plugin', 'gravity-forms-toolbar' ),
			'href'   => 'http://wordpress.org/extend/plugins/gravityforms-nl/',
			'meta'   => array( 'title' => __( 'Dutch language plugin', 'gravity-forms-toolbar' ) )
		);
	}

	// Show these items only if Gravity Forms main plugin is actually installed
	if ( class_exists( 'RGForms' ) ) {

		// Main Settings
		if ( current_user_can( 'gravityforms_view_settings' ) || current_user_can( 'gform_full_access' ) ) {

			$menu_items['gfsettings'] = array(
				'parent' => $gravitybar,
				'title'  => __( 'Gravity Forms Main Settings', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'admin.php?page=gf_settings' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Gravity Forms Main Settings', 'gravity-forms-toolbar' ) )
			);
			$menu_items['gfs-widgets'] = array(
				'parent' => $gfsettings,
				'title'  => __( 'Gravity Forms Widgets', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'widgets.php' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Gravity Forms Widgets', 'gravity-forms-toolbar' ) )
			);

			// Check for "Members" plugin + appropiate capabilities, then display settings if activated
			if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'members/members.php' ) ) && current_user_can( 'edit_roles' ) ) {
				$menu_items['gfs-pmembers'] = array(
					'parent' => $gfsettings,
					'title'  => __( 'Adjust User Roles &amp; Capabilities (Plugin: Members)', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'users.php?page=roles' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Adjust User Roles &amp; Capabilities (Plugin: Members)', 'gravity-forms-toolbar' ) )
				);
			}  // end-if members plugin check

		}  // end-if main settings

		// Edit Forms
		if ( current_user_can( 'gravityforms_edit_forms' ) || current_user_can( 'gform_full_access' ) ) {
			$menu_items['gfforms'] = array(
				'parent' => $gravitybar,
				'title'  => __( 'Edit Forms', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'admin.php?page=gf_edit_forms' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Edit Forms', 'gravity-forms-toolbar' ) )
			);
		}

		// Add New Forms
		if ( current_user_can( 'gravityforms_create_form' ) || current_user_can( 'gform_full_access' ) ) {
			$menu_items['gff-add-form'] = array(
				'parent' => $gfforms,
				'title'  => __( 'Add new Form', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'admin.php?page=gf_new_form' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Add new Form', 'gravity-forms-toolbar' ) )
			);
		}

		/**
		 * Dynamically add existing Forms and/or Entries at their sub-levels
		 *
		 * @since 1.2
		 */
                if ( !empty( $forms ) ) {
                        $class_first = 'ddw_gtfb-first-form';
			foreach ( $forms as $form ) {
				$view_title = $form['title'];
				if ( $form['unread_count'] > 0 ) {
					$count+= $form['unread_count'];
					$view_title.= ' ('.$form['unread_count'].')';
				}

				// Hook in existing Forms at "Form" entry
				$menu_items['gff-edit-form-'.$form['id']] = array(
					'parent' => $gfforms,
					'title'  => $form['title'],
					'href'   => admin_url( 'admin.php?page=gf_edit_forms&id='.$form['id'] ),
					'meta'   => array( 'class' => $class_first, 'target' => '', 'title' => $form['title'] )
				);

				// Hook in existing Form Entries at "Entries" entry
				$menu_items['gff-view-form-entries-'.$form['id']] = array(
					'parent' => $gfentries,
					'title'  => $view_title,
					'href'   => admin_url( 'admin.php?page=gf_entries&view=entries&id='.$form['id'] ),
					'meta'   => array( 'class' => $class_first, 'target' => '', 'title' => $form['title'] )
				);

				$class_first = '';
                        }
                }

		// View Entries
		if ( current_user_can( 'gravityforms_view_entries' ) || current_user_can( 'gform_full_access' ) ) {
			$menu_items['gfentries'] = array(
				'parent' => $gravitybar,
				'title'  => __( 'View Entries', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'admin.php?page=gf_entries' ),
				'meta'   => array( 'target' => '', 'title' => __( 'View Entries', 'gravity-forms-toolbar' ) )
			);
		}

		// Import & Export stuff
		if ( current_user_can( 'gravityforms_export_entries' ) || current_user_can( 'gform_full_access' ) ) {
			$menu_items['gfimportexport'] = array(
				'parent' => $gravitybar,
				'title'  => __( 'Import & Export', 'gravity-forms-toolbar' ),
				'href'   => '#',
				'meta'   => array( 'target' => '', 'title' => __( 'Import & Export', 'gravity-forms-toolbar' ) )
			);
			$menu_items['gfie-entries-export'] = array(
				'parent' => $gfimportexport,
				'title'  => __( 'Export Entries', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'admin.php?page=gf_export' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Export Entries', 'gravity-forms-toolbar' ) )
			);
			$menu_items['gfie-forms-export'] = array(
				'parent' => $gfimportexport,
				'title'  => __( 'Export Forms', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'admin.php?page=gf_export&view=export_form' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Export Forms', 'gravity-forms-toolbar' ) )
			);
			$menu_items['gfie-forms-import'] = array(
				'parent' => $gfimportexport,
				'title'  => __( 'Import Forms', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'admin.php?page=gf_export&view=import_form' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Import Forms', 'gravity-forms-toolbar' ) )
			);
		}

		// Official Add-Ons ('dummy' main entry for all capabalities!)
		$menu_items['gfaddonsinstalled'] = array(
			'parent' => $gravitybar,
			'title'  => __( 'Installed Add-Ons', 'gravity-forms-toolbar' ),
			'href'   => '#',
			'meta'   => array( 'target' => '', 'title' => __( 'Installed Add-Ons', 'gravity-forms-toolbar' ) )
		);

			// Display message if no Add-Ons are installed
			if ( !class_exists( 'GFAWeber' ) &&
				!class_exists( 'GFCampaignMonitor' ) &&
				!class_exists( 'GFFreshBooks' ) &&
				!class_exists( 'GFMailChimp' ) &&
				!class_exists( 'GFPayPal' ) &&
				!class_exists( 'GFTwilio' ) &&
				!class_exists( 'GFUser' ) &&
				!class_exists( 'Pronamic_IDeal_IDeal' ) &&
				!class_exists( 'GFDirectory' ) &&
				!class_exists( 'GFSalesforce' ) &&
				!class_exists( 'GFShootQ' ) &&
				!class_exists( 'GFiContact' ) &&
				!class_exists( 'GFMadMimi' ) &&
				!class_exists( 'GFExactTarget' )
			) {
				$menu_items['gfaonone'] = array(
					'parent' => $gfaddonsinstalled,
					'title'  => __( 'Currently none', 'gravity-forms-toolbar' ),
					'href'   => 'http://www.gravityforms.com/add-ons/',
					'meta'   => array( 'title' => __( 'Currently none', 'gravity-forms-toolbar' ) )
				);
			}  // end-if for no installed add-ons

			// Add-On: AWeber
			if ( class_exists( 'GFAWeber' ) && current_user_can( 'gravityforms_aweber' ) ) {
				$menu_items['gfaoaweber'] = array(
					'parent' => $gfaddonsinstalled,
					'title'  => __( 'AWeber Feeds', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_aweber' ),
					'meta'   => array( 'target' => '', 'title' => __( 'AWeber Feeds', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaoaweber-newfeed'] = array(
					'parent' => $gfaoaweber,
					'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_aweber&view=edit' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaoaweber-settings'] = array(
					'parent' => $gfaoaweber,
					'title'  => __( 'AWeber Settings', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_settings&addon=AWeber' ),
					'meta'   => array( 'target' => '', 'title' => __( 'AWeber Settings', 'gravity-forms-toolbar' ) )
				);
			}  // end-if aweber

			// Add-On: Campaign Monitor
			if ( class_exists( 'GFCampaignMonitor' ) && current_user_can( 'gravityforms_campaignmonitor' ) ) {
				$menu_items['gfaocampaignmonitor'] = array(
					'parent' => $gfaddonsinstalled,
					'title'  => __( 'Campaign Monitor Feeds', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_campaignmonitor' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Campaign Monitor Feeds', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaocampaignmonitor-newfeed'] = array(
					'parent' => $gfaocampaignmonitor,
					'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_campaignmonitor&view=edit' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaocampaignmonitor-settings'] = array(
					'parent' => $gfaocampaignmonitor,
					'title'  => __( 'Campaign Monitor Settings', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_settings&addon=Campaign+Monitor' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Campaign Monitor Settings', 'gravity-forms-toolbar' ) )
				);
			}  // end-if campaign monitor

			// Add-On: FreshBooks
			if ( class_exists( 'GFFreshBooks' ) && current_user_can( 'gravityforms_freshbooks' ) ) {
				$menu_items['gfaofreshbooks'] = array(
					'parent' => $gfaddonsinstalled,
					'title'  => __( 'FreshBooks Feeds', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_freshbooks' ),
					'meta'   => array( 'target' => '', 'title' => __( 'FreshBooks Feeds', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaofreshbooks-newfeed'] = array(
					'parent' => $gfaofreshbooks,
					'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_freshbooks&view=edit' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaofreshbooks-settings'] = array(
					'parent' => $gfaofreshbooks,
					'title'  => __( 'FreshBooks Settings', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_settings&addon=FreshBooks' ),
					'meta'   => array( 'target' => '', 'title' => __( 'FreshBooks Settings', 'gravity-forms-toolbar' ) )
				);
			}  // end-if freshbooks

			// Add-On: MailChimp
			if ( class_exists( 'GFMailChimp' ) && current_user_can( 'gravityforms_mailchimp' ) ) {
				$menu_items['gfaomailchimp'] = array(
					'parent' => $gfaddonsinstalled,
					'title'  => __( 'MailChimp Feeds', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_mailchimp' ),
					'meta'   => array( 'target' => '', 'title' => __( 'MailChimp Feeds', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaomailchimp-newfeed'] = array(
					'parent' => $gfaomailchimp,
					'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_mailchimp&view=edit' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaomailchimp-settings'] = array(
					'parent' => $gfaomailchimp,
					'title'  => __( 'MailChimp Settings', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_settings&addon=MailChimp' ),
					'meta'   => array( 'target' => '', 'title' => __( 'MailChimp Settings', 'gravity-forms-toolbar' ) )
				);
			}  // end-if mailchimp

			// Add-On: PayPal
			if ( class_exists( 'GFPayPal' ) && current_user_can( 'gravityforms_paypal' ) ) {
				$menu_items['gfaopaypal'] = array(
					'parent' => $gfaddonsinstalled,
					'title'  => __( 'PayPal Feeds', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_paypal' ),
					'meta'   => array( 'target' => '', 'title' => __( 'PayPal Feeds', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaopaypal-newfeed'] = array(
					'parent' => $gfaopaypal,
					'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_paypal&view=edit' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaopaypal-settings'] = array(
					'parent' => $gfaopaypal,
					'title'  => __( 'PayPal Settings', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_settings&addon=PayPal' ),
					'meta'   => array( 'target' => '', 'title' => __( 'PayPal Settings', 'gravity-forms-toolbar' ) )
				);
			}  // end-if paypal

			// Add-On: Twilio
			if ( class_exists( 'GFTwilio' ) && current_user_can( 'gravityforms_twilio' ) ) {
				$menu_items['gfaotwilio'] = array(
					'parent' => $gfaddonsinstalled,
					'title'  => __( 'Twilio Feeds', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_twilio' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Twilio Feeds', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaotwilio-newfeed'] = array(
					'parent' => $gfaotwilio,
					'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_twilio&view=edit' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaotwilio-settings'] = array(
					'parent' => $gfaotwilio,
					'title'  => __( 'Twilio Settings', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_settings&addon=Twilio' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Twilio Settings', 'gravity-forms-toolbar' ) )
				);
			}  // end-if twilio

			// Add-On: User Registration
			if ( class_exists( 'GFUser' ) && current_user_can( 'gravityforms_user_registration' ) ) {
				$menu_items['gfaouserreg'] = array(
					'parent' => $gfaddonsinstalled,
					'title'  => __( 'User Registration Feeds', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_user_registration' ),
					'meta'   => array( 'target' => '', 'title' => __( 'User Registration Feeds', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaouserreg-newfeed'] = array(
					'parent' => $gfaouserreg,
					'title'  => __( 'Add new Feed', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_user_registration&view=edit' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Add new Feed', 'gravity-forms-toolbar' ) )
				);
				$menu_items['gfaouserreg-settings'] = array(
					'parent' => $gfaouserreg,
					'title'  => __( 'User Registration Settings', 'gravity-forms-toolbar' ),
					'href'   => admin_url( 'admin.php?page=gf_settings&addon=User+Registration' ),
					'meta'   => array( 'target' => '', 'title' => __( 'User Registration Settings', 'gravity-forms-toolbar' ) )
				);
			}  // end-if user-reg.

			/** Last sub-level entry at very last position included, see end of file "gftb-plugins.php" */

		// end of Add-On level entry - back to more main level entries:

		// Updates
		if ( current_user_can( 'gravityforms_view_updates' ) || current_user_can( 'gform_full_access' ) ) {
			$menu_items['gfupdates'] = array(
				'parent' => $gravitybar,
				'title'  => __( 'Updates Available?', 'gravity-forms-toolbar' ),
				'href'   => admin_url( 'admin.php?page=gf_update' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Updates Available?', 'gravity-forms-toolbar' ) )
			);
		}

		// Help (for all capabalities)
		$menu_items['gfhelp'] = array(
			'parent' => $gravitybar,
			'title'  => __( 'Help &amp; Links', 'gravity-forms-toolbar' ),
			'href'   => admin_url( 'admin.php?page=gf_help' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Help &amp; Links', 'gravity-forms-toolbar' ) )
		);
                
                if ( $options['extensions']) {
                    /**
                    * Display last main item in the menu for active extensions/plugins
                    * ATTENTION: This is where plugins/extensions hook in on the sub-level hierarchy
                    *
                    * @since 1.0
                    */
                    $menu_items['extensions'] = array(
                            'parent' => $gravitybar,
                            'title'  => __( 'Active Extensions', 'gravity-forms-toolbar' ),
                            'href'   => admin_url( 'plugins.php' ),
                            'meta'   => array( 'target' => '', 'title' => __( 'Active Extensions', 'gravity-forms-toolbar' ) )
                    );
                }
	}  // end-if for Gravity Forms admin pages


	/**
	 * Display links to active plugins/extensions settings' pages
	 *
	 * @since 1.0
	 */
		// Include plugin file with plugin support links
		require_once( 'gftb-plugins.php' );


	// Allow menu items to be filtered, but pass in parent menu item IDs
	$menu_items = (array) apply_filters( 'ddw_gftb_menu_items', $menu_items, $prefix, $gravitybar, $gfsupport, $gfdocs, $gffaq, $gfsites, $gfsettings, $gfforms, $gfentries, $gfimportexport, $gfaddonsinstalled, $gfaoaweber, $gfaocampaignmonitor, $gfaofreshbooks, $gfaomailchimp, $gfaopaypal, $gfaotwilio, $gfaouserreg, $gftpaopideal, $gftpaoshootq, $gftpaoicontact, $gftpaomadmimi, $gftpaoexacttarget, $extensions, $extpideal );

	// Top level title and unread entries count display/styling
        $menu_item_title = __( 'Gravity Forms', 'gravity-forms-toolbar' );
		if ($count > 0) {
			$css = 'background: none repeat scroll 0 0 #EEEEEE; border-radius: 10px 10px 10px 10px; color: #333333; display: inline; font-size: 10px; font-weight: bold; padding: 2px 5px; text-shadow: none;';
			$to_add = sprintf( ' <span style="%s">%s</span>', $css, $count );
			$menu_item_title.= '<span title="' . __( 'Unread Entries', 'gravity-forms-toolbar' ) . '">' . $to_add . '</span>';
        	}

	// Add the top-level item
	$wp_admin_bar->add_menu( array(
		'id'    => $gravitybar,
		'title' => $menu_item_title,
		'href'  => admin_url( 'admin.php?page=gf_edit_forms' ),
		'meta'  => array( 'class' => 'icon-gravityforms', 'title' => __( 'Gravity Forms', 'gravity-forms-toolbar' ) )
	) );

	// Loop through the menu items
	foreach ( $menu_items as $id => $menu_item ) {
		
		// Add in the item ID
		$menu_item['id'] = $prefix . $id;

		// Add meta target to each item where it's not already set, so links open in new window/tab
		if ( ! isset( $menu_item['meta']['target'] ) )		
			$menu_item['meta']['target'] = '_blank';

		// Add class to links that open up in a new window/tab
		if ( '_blank' === $menu_item['meta']['target'] ) {
			if ( ! isset( $menu_item['meta']['class'] ) )
				$menu_item['meta']['class'] = '';
			$menu_item['meta']['class'] .= $prefix . 'gftb-new-tab';
		}

		// Add item
		$wp_admin_bar->add_menu( $menu_item );
	}

}  // end of main function


add_action( 'wp_head', 'ddw_gftb_admin_style' );
add_action( 'admin_head', 'ddw_gftb_admin_style' );
/**
 * Add the styles for new WP Admin Bar entry
 * 
 * @since 1.0
 */
function ddw_gftb_admin_style() {

	if ( ! is_admin_bar_showing() )
		return;

	?>
	<style type="text/css">
		/* Show first level icon - prior WordPress 3.3 */
		#wpadminbar .icon-gravityforms > a {
			background: url(<?php echo plugins_url( 'gravity-forms-toolbar/images/gravityforms-icon.png', dirname(__FILE__) ); ?>) no-repeat 0.85em 50% transparent;
			padding-left: 30px;
		}
		/* Show first level icon - WordPress 3.3 or higher */
		#wpadminbar.nojs .ab-top-menu > li.menupop.icon-gravityforms:hover > .ab-item,
		#wpadminbar .ab-top-menu > li.menupop.icon-gravityforms.hover > .ab-item,
		#wpadminbar.nojs .ab-top-menu > li.menupop.icon-gravityforms > .ab-item,
		#wpadminbar .ab-top-menu > li.menupop.icon-gravityforms > .ab-item {
      			 background-image: url(<?php echo plugins_url( 'gravity-forms-toolbar/images/gravityforms-icon.png', dirname( __FILE__ ) ); ?>);
			background-repeat: no-repeat;
			background-position: 0.85em 50%;
			padding-left: 30px;
		}
                li.ddw_gtfb-first-form,
		#wp-admin-bar-ddw-gravityforms-gfsettings,
		#wp-admin-bar-ddw-gravityforms-extensions {
    			border-top: 1px solid;
		}
		#wp-admin-bar-ddw-gravityforms-bbp-forum-de a:link {
			background: #f5f5f5;
		}
		#wp-admin-bar-ddw-gravityforms-bbp-forum-de a:hover {
			background: inherit;
		}
                #wp-admin-bar-ddw-gravityforms-toolbar-default li:first-child {
                    border-top: none !important;
                }
	</style>
	<?php

}  // end of function ddw_gftb_admin_style
