<?php
/**
 * Latest Groups
 *
 */

$title = elgg_view('output/url', array(
	'href' => "/groups/all",
	'text' => elgg_echo('river_addon:latest:groups'),
	'is_trusted' => true,
));

$num = (int) elgg_get_plugin_setting('num_groups', 'river_addon');

$options = array(
	'type' => 'group', 
	'full_view' => FALSE,
	'pagination' => FALSE,
	'limit' => $num,
);
$content = elgg_get_entities($options);

if ($content) {
	elgg_push_context('widgets');
	$items = '';
	foreach ($content as $group) {
		$items .= elgg_view_entity($group);
	}
}
echo elgg_view_module('aside', $title, $items);
