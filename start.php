<?php
/*
 *
 * Elgg river_addon
 *
 * @author Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2014, Elggzone
 *
 * @link http://www.perjensen-online.dk/
 *
 */
 	  
elgg_register_event_handler('init', 'system', 'river_addon_init');

function river_addon_init() {

	$root = dirname(__FILE__);
	$plugin = elgg_get_plugin_from_id('river_addon');

	elgg_register_library("river_addon:modules", "$root/lib/river_addon.php");
	elgg_register_library("river_addon:setup", "$root/lib/setup.php");
	elgg_load_library('river_addon:modules');

	elgg_register_action("river_addon/reorder", "$root/actions/reorder.php");
	elgg_register_action("river_addon/context", "$root/actions/context.php");
	elgg_register_action("river_addon/admin/announcements", "$root/actions/settings.php", 'admin');
	elgg_register_action("river_addon/admin/sidebar", "$root/actions/settings.php", 'admin');
	elgg_register_action("river_addon/admin/general", "$root/actions/settings.php", 'admin');
	
  	$js = elgg_get_simplecache_url('js', 'river_addon/settings');
	elgg_register_simplecache_view('js/river_addon/settings');
	elgg_register_js('settings', $js);
	elgg_load_js('settings');	
	
	if ($plugin->show_thewire == 'yes'){
		elgg_register_action("river_addon/add", "$root/actions/add.php");		
		elgg_extend_view('js/elgg', 'js/river_addon/update');
	}
	
	elgg_extend_view('css/elgg', 'river_addon/css');
	elgg_extend_view('css/admin', 'river_addon/admin', 1);

	elgg_register_js('jquery.sudoSlider.2.1.6.min', 'mod/river_addon/vendors/js/jquery.sudoSlider.2.1.6.min.js', 'footer');
	elgg_load_js('jquery.sudoSlider.2.1.6.min');
	elgg_register_js('multiselect.min', 'mod/river_addon/vendors/js/multiselect.min.js');
	elgg_load_js('multiselect.min');
		
	elgg_unregister_page_handler('activity', '_elgg_river_page_handler');
	elgg_register_page_handler('activity', 'river_addon_river_page_handler');
	
	elgg_register_event_handler('pagesetup', 'system', 'river_addon_pagesetup', 1000);
	
	elgg_register_admin_menu_item('configure', 'river_addon', 'settings');

	if (elgg_is_admin_logged_in()) {
		elgg_register_menu_item('extras', array(
			'name' => 'themeadministration',
			'href' => 'admin/settings/river_addon',
			'title' => elgg_echo('river_addon:tooltip:settings'),
			'text' => elgg_view_icon('settings-alt'),
			'priority' => 1000,
		));
	}
}

function river_addon_pagesetup() {
	if (elgg_is_logged_in()){
		elgg_load_library("river_addon:setup");
	}
}

function river_addon_river_page_handler($page) {
	global $CONFIG;

	$tab_order = elgg_get_plugin_setting('tab_order', 'river_addon');
	if ($tab_order == 'friend_order') {
		$param = 'friends';
	} else if ($tab_order == 'mine_order'){
		$param = 'mine';
	} else {
		$param = 'all';
	}
	
	elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());

	// make a URL segment available in page handler script
	$page_type = elgg_extract(0, $page, $param);
	$page_type = preg_replace('[\W]', '', $page_type);
	if ($page_type == 'owner') {
		elgg_gatekeeper();
		$page_username = elgg_extract(1, $page, '');
		if ($page_username == elgg_get_logged_in_user_entity()->username) {
			$page_type = 'mine';
		} else {
			elgg_admin_gatekeeper();
			set_input('subject_username', $page_username);
		}
	}
	set_input('page_type', $page_type);

	require_once("{$CONFIG->path}pages/river.php");
	return true;
}

