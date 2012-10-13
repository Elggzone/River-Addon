<?php
/**
 * Menu module
 *
 */

$user = elgg_get_page_owner_entity();

if (!$user) {
	return TRUE;
}

$title = elgg_echo('river_addon:welcome', array($user->name));

$body = elgg_view_menu('owner_block', array(
	'entity' => elgg_get_page_owner_entity(),
));

echo elgg_view('page/components/module', array(
	'title' => $title,
	'body' => $body,
	'class' => 'elgg-module-info',
));
