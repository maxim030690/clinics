<?php
/*
	Plugin Name: LiveSupporti
	Plugin URI: http://livesupporti.com
	Description: A plugin that allows to add <strong>live support chat</strong> on a WordPress website. To get started just click <strong>Activate</strong>.
	Version: 1.0.1
	Author: LiveSupporti
	Author URI: http://livesupporti.com
	License: GPL2
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//add_action('init', 'do_output_buffer');

add_action('wp_footer', 'livesupporti_init');

add_action('admin_menu', 'getLiveSupportiAdminMenu');

register_activation_hook( __FILE__, 'livesupporti_activate_plugin' );

add_action('admin_init', 'redirectToLiveSupportiAdminPage');

//function do_output_buffer() {
//        ob_start();
//}

function livesupporti_init() {
	$license = get_option('liveSupportiLicense');
	$skin = get_option('liveSupportiSkin');
	addLiveSupportiScript($license, $skin);
}

function addLiveSupportiScript($license, $skin) {
	if ($license != '' && $skin != '')
	{
		echo '
				<!-- Live chat by LiveSupporti - https://livesupporti.com -->
				<script type="text/javascript">
				  (function() {
					var s=document.createElement("script");s.type="text/javascript";s.async=true;s.id="lsInitScript";
					s.src = "https://livesupporti.com/Scripts/clientAsync.js?acc='.$license.'&skin='.$skin.'";
					var scr=document.getElementsByTagName("script")[0];scr.parentNode.appendChild(s, scr);
				  })();
				</script>
		';
	}	
}

function getLiveSupportiAdminMenu() {
	$icon = "https://livesupporti.com/Images/favicon.png";
	add_menu_page('LiveSupporti', 'LiveSupporti', 10, dirname( __FILE__ ) . '/livesupporti.php', '', $icon);
	add_submenu_page(dirname( __FILE__ ) . '/livesupporti.php', 'Settings', 'Settings', 'manage_options', dirname( __FILE__ ) . '/livesupporti.php', 'livesupporti_settings');
}

function livesupporti_settings() {
	if (!current_user_can('manage_options')) {
		wp_die(__('You do not have sufficient permissions to access this page.'));
	}
	
	$hidLiveSupporti = 'hidLiveSupporti';

	if(isset($_POST[$hidLiveSupporti]) && $_POST[$hidLiveSupporti] == 'IsPostBack') {
		$pk = $_POST['txtLicense'];
		$pk = trim($pk);
		update_option('liveSupportiLicense', $pk);
		update_option('liveSupportiSkin', $_POST['selectLiveSupportiSkin']);
?>
<div><p><?php _e('<span style="color:#61D400;font-size:14px;background-color:#FFFFFF;border:1px solid #61D400;padding:5px;border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px;margin-right: 10px;">Changes have been saved.</span> <strong><a href="https://livesupporti.com/live">Start using LiveSupporti now.</a></strong>', 'menu-general' );?></p></div>
<?php
}
?>
	<div style='padding:15px 15px 15px 0px;'>
		<div style='padding:15px;border:1px solid #e5e5e5;background-color:#FFFFFF;'>
			<form name="form1" method="post" action="">
				<img src="<?php echo plugin_dir_url( __FILE__ ).'logo.png'; ?>"/>
				<input type="hidden" name="<?php echo $hidLiveSupporti; ?>" value="IsPostBack">
				<h1 style="color:#1FB9F2">Getting Started with LiveSupporti</h1>
				<br/>
				<h3>Step 1</h3>
				<p>To add the live chat plugin on your website you need a LiveSupporti account. If you don't have an account you can <a href="https://livesupporti.com/plugins/live-chat-for-wordpress" target="_blank" title="Get free live support chat">sign up here</a>.</p>
				<h3>Step 2</h3>
				<p>Copy your <a href="https://livesupporti.com/pk" target="_blank">product key from here</a>, paste it below, select your skin and click <b>'Save'</b>.</p>
				<br>
				<input type="text" name="txtLicense" size="50" value="<?php echo get_option('liveSupportiLicense') ?>">
				<div>
					<span style="display:inline-block;margin-top:15px;">Skin:</span>
					
					<select name="selectLiveSupportiSkin" style="margin-top:15px;vertical-align:baseline">
					<?php
						$skin = get_option('liveSupportiSkin');
						$skins = array('Classic'=>'Classic', 'Modern'=>'Modern');
						foreach ($skins as $val => $label)
						{
							$selected = ($skin == $val) ? "selected='selected'":'';
							echo "<option value='$val' $selected>$label</option>\n";
						}
					?>
					</select>
				</div>
				<p class="submit">
					<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save') ?>" />
				</p>
				<h3>Step 3</h3>
				<p><a href="https://livesupporti.com/login" target="_blank">Sign in</a> and click on 'Live' in your LiveSupporti dashboard.</p>
			</form>
		</div>
	</div>
<?php
}
?>
<?php
function livesupporti_activate_plugin() {
    add_option('redirectToLiveSupportiAdminPage', true);
}

function redirectToLiveSupportiAdminPage() {
    if (get_option('redirectToLiveSupportiAdminPage', false)) {
        delete_option('redirectToLiveSupportiAdminPage');
    	wp_redirect(admin_url('admin.php?page=livesupporti/livesupporti.php'));
    }
}
?>