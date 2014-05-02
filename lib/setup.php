<?php
/**
 *
 * River Addon context dependent setup
 *
 * @package river_addon
 * 
 */
  
$plugin = elgg_get_plugin_from_id('river_addon');		
$ctx = elgg_get_context();

if ($plugin->show_thewire == 'yes' && $ctx == 'activity'){
	elgg_extend_view('page/layouts/elements/header', 'page/elements/riverwire', 1);
}
if ($plugin->show_icon != 'no' && ($ctx == $plugin->icon_context || $plugin->icon_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_icon, 'page/elements/rivericon', $plugin->show_icon_order);
}
if ($plugin->show_menu != 'no' && ($ctx == $plugin->menu_context || $plugin->menu_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_menu, 'page/elements/ownermenu', $plugin->show_menu_order);
}
if ($plugin->show_latest_members != 'no' && ($ctx == $plugin->members_context || $plugin->members_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_latest_members, 'page/elements/latest_members', $plugin->show_latest_members_order);
}
if ($plugin->show_friends != 'no' && ($ctx == $plugin->friends_context || $plugin->friends_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_friends , 'page/elements/friends', $plugin->show_friends_order);
}
if ($plugin->show_friends_online != 'no' && ($ctx == $plugin->online_context || $plugin->online_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_friends_online, 'page/elements/friendsonline', $plugin->show_friends_online_order);  
}
if ($plugin->show_latest_groups != 'no' && ($ctx == $plugin->latest_groups_context || $plugin->latest_groups_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_latest_groups, 'page/elements/latest_groups', $plugin->show_latest_groups_order);
}
if ($plugin->show_groups != 'no' && ($ctx == $plugin->groups_context || $plugin->groups_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_groups, 'page/elements/mygroups', $plugin->show_groups_order);
}
if ($plugin->show_custom != 'no' && ($ctx == $plugin->custom_context || $plugin->custom_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_custom, 'page/elements/custom_module', $plugin->show_custom_order);
}
if ($plugin->show_albums != 'no' && ($ctx == $plugin->albums_context || $plugin->albums_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_albums, 'page/elements/latest_albums', $plugin->show_albums_order);
}
if ($plugin->show_comments != 'no' && ($ctx == $plugin->comments_context || $plugin->comments_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_comments, 'page/elements/latest_comments', $plugin->show_comments_order);
}
if ($plugin->show_ticker != 'no' && ($ctx == $plugin->ticker_context || $plugin->ticker_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_ticker, 'page/elements/sidebarticker', $plugin->show_ticker_order);
}
if ($plugin->show_tagcloud != 'no' && ($ctx == $plugin->tagcloud_context || $plugin->tagcloud_context == 'site')){
	elgg_extend_view('page/elements/' . $plugin->show_tagcloud, 'page/elements/tagcloud_block', $plugin->show_tagcloud_order);	
}
if ($plugin->show_announcement == 'yes' && ($ctx == $plugin->announcement_context || $plugin->announcement_context == 'site')){
	elgg_extend_view('page/layouts/elements/header', 'page/elements/announcements', 0);
}
