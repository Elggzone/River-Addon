<?php
/**
 * Albums module
 *
 */

$title = elgg_view('output/url', array(
	'href' => "/photos/all",
	'text' => elgg_echo('tidypics:widget:albums'),
	'is_trusted' => true,
));

$num = (int) elgg_get_plugin_setting('num_albums', 'river_addon');

$options = array(
	"type" => "object",
	"subtype" => "album",
	"limit" => $num,
	"full_view" => false,
	"pagination" => false,
	"view_type_toggle" => false,
	'full_view' => false
);
$albums = elgg_get_entities_from_metadata($options);

if ($albums) {
	elgg_push_context('widgets');
	$item = '';
	foreach ($albums as $album) {
		$item .= elgg_view_entity($album);
	}
	elgg_pop_context();
	echo elgg_view_module('aside', $title, $item);
}else {
	$item = elgg_echo('river_addon:albums:none');
	echo elgg_view_module('aside', $title, $item);
}
