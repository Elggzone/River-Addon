<?php
/**
 * Latest Members
 *
 */

$title = elgg_view('output/url', array(
	'href' => "/members",
	'text' => elgg_echo('river_addon:latest:members'),
	'is_trusted' => true,
));

$options = array(
	'type' => 'user', 
	'full_view' => false,
	'pagination' => FALSE,
	'limit' => 21,
	'list_type' => 'gallery',
);
$content = elgg_list_entities($options);

echo elgg_view_module('featured', $title, $content);
