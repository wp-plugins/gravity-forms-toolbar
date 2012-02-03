<?php
/**
 * Display plugin's own settings
 *
 * @package    Gravity Forms Toolbar
 * @subpackage Admin Settings
 * @author     Milan Petrovic - Dev4Press
 * @copyright  Copyright 2012, Milan Petrovic - Dev4Press
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://twitter.com/#!/dev4press
 *
 * @since 1.2
 * @version 1.0
 */

$options = ddw_gtfb_get_options();

?>
<form method="post" action="options.php">
	<?php settings_fields( 'ddw_gtfb_options' ); ?>

	<table class="form-table">
	<tbody>
		<tr valign="top">
			<th scope="row"><?php _e( 'Menu Items Visibility', 'gravity-forms-toolbar' ); ?></th>
			<td>
				<fieldset>
                       			<legend class="screen-reader-text"><span><?php _e( 'Menu Items Visibility', 'gravity-forms-toolbar' ); ?></span></legend>
                        		<label for="ddw_gtfb_help_and_support">
                            			<input<?php if ($options['help_and_support']) echo ' checked'; ?> type="checkbox" value="1" id="ddw_gtfb_help_and_support" name="ddw_gtfb[help_and_support]">
                            			<?php _e( 'Help, Documnetation and FAQ options', 'gravity-forms-toolbar' ); ?>
                       			</label><br>
                        		<label for="ddw_gtfb_extensions">
                            			<input<?php if ($options['extensions']) echo ' checked'; ?> type="checkbox" value="1" id="ddw_gtfb_extensions" name="ddw_gtfb[extensions]">
						<?php _e( 'Active Extensions', 'gravity-forms-toolbar' ); ?>
					</label>
				</fieldset>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Forms Details', 'gravity-forms-toolbar' ); ?></th>
			<td>
				<fieldset>
					<legend class="screen-reader-text"><span><?php _e( 'Forms Details', 'gravity-forms-toolbar' ); ?></span></legend>
					<label for="forms_details">
						<input<?php if ($options['forms_details']) echo ' checked'; ?> type="checkbox" value="1" id="ddw_gtfb_forms_details" name="ddw_gtfb[forms_details]">
						<?php _e( 'Include list of forms and entries counts', 'gravity-forms-toolbar' ); ?>
					</label><br>
					<small><em>(<?php _e( 'Note: This will generate additional SQL queries to get forms information.', 'gravity-forms-toolbar' ); ?>)</em></small>
				</fieldset>
			</td>
		</tr>
	</tbody>
	</table>

	<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'gravity-forms-toolbar' ); ?>" />
	</p>
</form>
