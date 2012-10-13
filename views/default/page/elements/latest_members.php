<?php
/**
 * Latest Members module
 *
 */

elgg_push_context('widgets');

$title = elgg_view('output/url', array(
	'href' => "/members",
	'text' => elgg_echo('river_addon:latest:members'),
	'is_trusted' => true,
));

$num = (int) elgg_get_plugin_setting('num_members', 'river_addon');

$options = array(
	'type' => 'user', 
	'full_view' => false,
	'pagination' => FALSE,
	'limit' => $num,
	'list_type' => 'gallery'
);
$content = elgg_get_entities($options);

if ($content) {
	$items = '';
	foreach ($content as $user) {
		$items .= elgg_view_entity_icon($user, 'tiny');
	}
}

elgg_pop_context();

echo elgg_view_module('featured', $title, $items);
