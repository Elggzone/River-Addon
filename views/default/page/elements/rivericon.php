<?php

/**
 * profile icon
 */

//$user = elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
$user = elgg_get_page_owner_entity();

$icon = elgg_view_entity_icon($user, 'large', array('use_hover' => false));

echo <<<HTML

<div id="profile-owner-block">
	$icon
</div>

HTML;


