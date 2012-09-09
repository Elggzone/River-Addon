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

$options = array(
	'type' => 'group', 
	'full_view' => false,
	'pagination' => FALSE,
	'limit' => 4,
);
$content = elgg_list_entities($options);

echo elgg_view_module('aside', $title, $content);
