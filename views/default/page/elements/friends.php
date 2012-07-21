<?php

$owner = elgg_get_page_owner_entity();

$title = elgg_view('output/url', array(
	'href' => "/friends/$owner->username",
	'text' => elgg_echo('friends'),
	'is_trusted' => true,
));
	
// number of friends to display
$num = (int) elgg_get_plugin_setting('num_friends', 'river_addon');

// icon size
$size = 'tiny';

if (elgg_instanceof($owner, 'user')) {
	$html = $owner->listFriends('', $num, array(
		'size' => $size,
		'pagination' => FALSE,
		'list_type' => 'gallery',
	));
	if ($html) {	
		$content = $html;
	}
}
echo elgg_view_module('featured', $title, $content);
