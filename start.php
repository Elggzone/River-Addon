<?php
/*
 *
 * Elgg river_addon
 *
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2012, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */
 	  
elgg_register_event_handler('init', 'system', 'river_addon_init');

function river_addon_init() {

	$action_path = dirname(__FILE__) . '/actions';

	$plugin = elgg_get_plugin_from_id('river_addon');
	
	if ($plugin->show_thewire == 'yes'){
		elgg_register_action("river_addon/add", "$action_path/add.php");		
		elgg_extend_view('js/elgg', 'js/update');
	}
	elgg_extend_view('js/elgg', 'js/river');
	
	elgg_extend_view('css/elgg', 'river_addon/css');
	elgg_extend_view('css/admin', 'river_addon/admin');	

	elgg_register_js('jquery.sudoSlider.2.1.6.min', 'mod/river_addon/vendors/js/jquery.sudoSlider.2.1.6.min.js', 'footer');
	elgg_load_js('jquery.sudoSlider.2.1.6.min');
	
	elgg_unregister_page_handler('activity', 'elgg_river_page_handler');
	elgg_register_page_handler('activity', 'river_addon_river_page_handler');

	if (elgg_is_logged_in()	&& elgg_get_context() == 'activity'){
	
		if ($plugin->show_thewire == 'yes'){
			elgg_extend_view('page/layouts/content/header', 'page/elements/riverwire', 1);
		}
		if ($plugin->show_icon != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_icon, 'page/elements/rivericon', '501');
		}
		if ($plugin->show_menu != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_menu, 'page/elements/ownermenu', '502');
		}
		if ($plugin->show_latest_members != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_latest_members, 'page/elements/latest_members', '503');
		}		
		if ($plugin->show_friends != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_friends , 'page/elements/friends', '504');
		}
		if ($plugin->show_friends_online != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_friends_online, 'page/elements/friendsonline', '505');  
    	}
		if ($plugin->show_latest_groups != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_latest_groups, 'page/elements/latest_groups', '506');
		}
		if ($plugin->show_groups != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_groups, 'page/elements/mygroups', '507');
		}
		if ($plugin->show_custom != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_custom, 'page/elements/custom_module', 508);
		}		
	}	
	if (elgg_get_context() == 'activity' && $plugin->show_ticker != 'no'){
		elgg_extend_view('page/elements/' . $plugin->show_ticker, 'page/elements/sidebarticker', '509');
	}
	if (elgg_get_context() == 'activity' && $plugin->show_tagcloud != 'no'){
		elgg_extend_view('page/elements/' . $plugin->show_tagcloud, 'page/elements/tagcloud_block', '510');	
	}

	if (elgg_is_admin_logged_in()) {
		elgg_register_menu_item('extras', array(
			'name' => 'themeadministration',
			'href' => 'admin/plugin_settings/river_addon',
			'title' => elgg_echo('river_addon:tooltip:settings'),
			'text' => elgg_view_icon('settings-alt'),
			'priority' => 1000,
		));
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
		$page_type = 'mine';
	}
	set_input('page_type', $page_type);

	// content filter code here
	$entity_type = '';
	$entity_subtype = '';

	require_once("{$CONFIG->path}mod/river_addon/pages/river.php");
	return true;
}

