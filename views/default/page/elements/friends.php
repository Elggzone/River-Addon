<?php

$owner = elgg_get_page_owner_entity();
$friends = elgg_get_logged_in_user_entity()->getFriends('', 0);

$title = elgg_view('output/url', array(
	'href' => "/friends/$owner->username",
	'text' => elgg_echo('friends'),
	'is_trusted' => true,
));    
	
// number of friends to display
$num = (int) elgg_get_plugin_setting('num_friends', 'river_addon');

if ($friends) {	
	foreach ($friends as $friend) {
		$count = count($friends);
	}
	if (elgg_instanceof($owner, 'user')) {
		$html = $owner->listFriends('', $num, array(
			'size' => 'tiny',
			'pagination' => FALSE,
			'list_type' => 'gallery',
			'limit' => $num,
			'order_by' => 'rand()'
		));
		if ($html && $friends) {
			$content = $html;
		}
	}
	$title .= '<span> (' . $count . ')</span>';
	echo elgg_view_module('featured', $title, $content);
}
