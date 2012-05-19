<?php
/**
 * Helper functions for the admin - plugin links.
 *
 * @package    Gravity Forms Toolbar
 * @subpackage Admin
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/gravity-forms-toolbar/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 * @version 1.1
 */

/**
 * Add "Settings" link to plugin page
 *
 * @since 1.4
 *
 * @param  $gftb_links
 * @param  $gftb_settings_link
 * @return strings settings link
 */
function ddw_gftb_settings_page_link( $gftb_links ) {

	$gftb_settings_link = sprintf( '<a href="%s" title="%s">%s</a>' , admin_url( 'options-general.php?page=ddw_gftb_options_page' ) , __( 'Go to the settings page', 'gravity-forms-toolbar' ) , __( 'Settings', 'gravity-forms-toolbar' ) );
	
	array_unshift( $gftb_links, $gftb_settings_link );

	return $gftb_links;

}  // end of function ddw_gftb_settings_page_link


add_filter( 'plugin_row_meta', 'ddw_gftb_plugin_links', 10, 2 );
/**
 * Add various support links to plugin page
 *
 * @since 1.0
 *
 * @param  $gftb_links
 * @param  $gftb_file
 * @return strings plugin links
 */
function ddw_gftb_plugin_links( $gftb_links, $gftb_file ) {

	if ( ! current_user_can( 'install_plugins' ) )
		return $gftb_links;

	if ( $gftb_file == GFTB_PLUGIN_BASEDIR . '/gravity-forms-toolbar.php' ) {
		$gftb_links[] = '<a href="http://wordpress.org/extend/plugins/gravity-forms-toolbar/faq/" target="_new" title="' . __( 'FAQ', 'gravity-forms-toolbar' ) . '">' . __( 'FAQ', 'gravity-forms-toolbar' ) . '</a>';
		$gftb_links[] = '<a href="http://wordpress.org/support/plugin/gravity-forms-toolbar" target="_new" title="' . __( 'Support', 'gravity-forms-toolbar' ) . '">' . __( 'Support', 'gravity-forms-toolbar' ) . '</a>';
		$gftb_links[] = '<a href="' . __( 'http://genesisthemes.de/en/donate/', 'gravity-forms-toolbar' ) . '" target="_new" title="' . __( 'Donate', 'gravity-forms-toolbar' ) . '">' . __( 'Donate', 'gravity-forms-toolbar' ) . '</a>';
	}

	return $gftb_links;

}  // end of function ddw_gftb_plugin_links
