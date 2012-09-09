<?php

$user = elgg_get_logged_in_user_entity();
$user_guid = $user->getGUID();
	
$title = elgg_echo('groups:widget:membership');

$group_count = elgg_get_plugin_user_setting('group_count', $user_guid, 'river_addon');

elgg_push_context('widgets');
$options = array(
	'type' => 'group',
	'relationship' => 'member',
	'relationship_guid' => elgg_get_page_owner_guid(),
	'limit' => $group_count,
	'full_view' => FALSE,
	'pagination' => FALSE,
	'count' => TRUE
);
$content = elgg_list_entities_from_relationship($options);
elgg_pop_context();

$number = elgg_get_entities_from_relationship($options);	
$title .= '<span> ' . $number . '</span>';

if ($number < 1) {
	$url = "groups/all";
	$visit = elgg_view('output/url', array(
		'href' => $url,
		'text' => elgg_echo('river_addon:groups:join'),
		'is_trusted' => true,
	));
	$content = elgg_echo('river_addon:groups:none') . $visit;	
	echo elgg_view_module('aside', $title, $content);
} else {
	echo elgg_view_module('aside', $title, $content);
}
