<?php
/**
 * Group membership module
 *
 */

$user = elgg_get_logged_in_user_entity();
$user_guid = $user->getGUID();

$title = elgg_echo('groups:widget:membership');

$group_count = elgg_get_plugin_user_setting('group_count', $user_guid, 'river_addon');

$options = array(
	'type' => 'group',
	'limit' => $group_count,
	'relationship' => 'member',
	'relationship_guid' => elgg_get_logged_in_user_guid(),
	'full_view' => FALSE,
	'pagination' => FALSE
);
$groups = elgg_get_entities_from_relationship($options);

if ($groups) {
	elgg_push_context('widgets');
	$item = '';
	foreach ($groups as $group) {
		$item .= elgg_view_entity($group);
	}
	elgg_pop_context();
}else {
	$url = "groups/all";
	$visit = elgg_view('output/url', array(
		'href' => $url,
		'text' => elgg_echo('river_addon:groups:join'),
		'is_trusted' => true,
	));
   $item = elgg_echo ('river_addon:groups:none') . $visit;
}
echo elgg_view_module('aside', $title, $item);
