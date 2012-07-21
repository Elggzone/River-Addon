<?php

$user = elgg_get_logged_in_user_entity();
$user_guid = $user->getGUID();

$group_count = elgg_get_plugin_user_setting('group_count', $user_guid, 'river_addon');
	
$title = elgg_echo('groups:widget:membership');
	
$content = elgg_list_entities_from_relationship_count(array(
	'type' => 'group',
	'relationship' => 'member',
	'relationship_guid' => elgg_get_page_owner_guid(),
	'full_view' => FALSE,
	'pagination' => FALSE,
	'limit' => $group_count,

));
if ($content){
	echo elgg_view_module('aside', $title, $content);
}	
	
	
	

