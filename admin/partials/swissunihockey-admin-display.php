<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://flaviowaser.ch
 * @since      1.0.0
 *
 * @package    Swissunihockey
 * @subpackage Swissunihockey/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
		        <div id="icon-themes" class="icon32"></div>  
		        <h2>SwissUnihockey Plugin</h2>
				<table>
					<tr>
						<th>Setting</th>
						<th>Value</th>
					</tr>
					<tr>
						<td>Swiss Floorball Team ID</td>
						<td><?php echo get_option('swissfloorball_team_number');?></td>
					</tr>
					<tr>
						<td>Swiss Floorball Team Name</td>
						<td><?php call_swiss_floorball_team_API();?></td>
					</tr>
				</table>

				
				<!--NEED THE settings_errors below so that the errors/success messages are shown after submission - wasn't working once we started using add_menu_page and stopped using add_options_page so needed this-->
				<?php settings_errors(); ?>  
		        <form method="POST" action="options.php">  
		            <?php 
		                settings_fields( 'plugin_name_general_settings' );
		                do_settings_sections( 'plugin_name_general_settings' ); 
		            ?>             
		            <?php submit_button(); ?>  
		        </form> 
</div>