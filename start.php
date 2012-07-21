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

	if (elgg_get_plugin_setting('show_thewire', 'river_addon') == 'yes'){
		// actions		
		elgg_register_action("river_addon/add", "$action_path/add.php");		
		elgg_extend_view('js/elgg', 'js/update');
	}

	elgg_extend_view('css/elgg', 'river_addon/css');
	elgg_extend_view('css/admin', 'river_addon/admin');	

	elgg_register_js('jquery.sudoSlider.2.1.6.min', 'mod/river_addon/vendors/js/jquery.sudoSlider.2.1.6.min.js', 'footer');
	elgg_load_js('jquery.sudoSlider.2.1.6.min');
	
	elgg_unregister_page_handler('activity', 'elgg_river_page_handler');
	elgg_register_page_handler('activity', 'river_addon_river_page_handler');

	// added to show sidebar_alt content
	elgg_extend_view('page/elements/sidebar_alt', 'page/elements/demo_element');
		
	if (elgg_is_logged_in()	&& elgg_get_context() == 'activity'){
	
		if (elgg_get_plugin_setting('show_thewire', 'river_addon') == 'yes'){	
			elgg_extend_view('page/layouts/content/header', 'page/elements/riverwire', 1);
		}	
		if (elgg_get_plugin_setting('show_icon', 'river_addon') == 'yes'){	
			elgg_extend_view('page/elements/sidebar', 'page/elements/rivericon', '501');
		}
		if (elgg_get_plugin_setting('show_menu', 'river_addon') == 'yes'){		
			elgg_extend_view('page/elements/sidebar', 'page/elements/ownermenu', '502');
		}		
		if (elgg_get_plugin_setting('show_friends', 'river_addon') == 'yes'){	
			elgg_extend_view('page/elements/sidebar', 'page/elements/friends', '503');
		}
		if (elgg_get_plugin_setting('show_friends_online', 'river_addon') == 'yes') {		
			elgg_extend_view('page/elements/sidebar', 'page/elements/friendsonline', '504');  
    	}
		if (elgg_get_plugin_setting('show_groups', 'river_addon') == 'yes'){	
			elgg_extend_view('page/elements/sidebar', 'page/elements/mygroups', '505');
		}		
	}
	
	if (elgg_get_context() == 'activity' && elgg_get_plugin_setting('show_ticker', 'river_addon') == 'yes'){	
		elgg_extend_view('page/elements/sidebar', 'page/elements/sidebarticker', '506');
	}
	if (elgg_get_plugin_setting('show_tagcloud', 'river_addon') == 'yes'){
		if (elgg_get_plugin_setting('columns', 'river_addon') == 'yes'){
			elgg_extend_view('page/elements/sidebar_alt', 'page/elements/tagcloud_block', '507');
		} else {
			elgg_extend_view('page/elements/sidebar', 'page/elements/tagcloud_block', '508');
		}		
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

	require_once("{$CONFIG->path}pages/river.php");
	return true;
}

