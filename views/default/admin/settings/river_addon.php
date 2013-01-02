<?php
/**
 * River Addon tabs
 */

$tab = get_input('tab', 'settings');

echo elgg_view('navigation/tabs', array(
	'tabs' => array(
		array(
			'text' => elgg_echo('settings'),
			'href' => '/admin/settings/river_addon?tab=settings',
			'selected' => ($tab == 'settings'),
		),
		array(
			'text' => elgg_echo('river_addon:tab:announcement'),
			'href' => '/admin/settings/river_addon?tab=announcements',
			'selected' => ($tab == 'announcements'),
		)
	)
));

switch ($tab) {
	case 'announcements':
		echo elgg_view('admin/settings/river_addon/announcements');
		break;
	default:
	case 'settings':
		echo elgg_view('admin/settings/river_addon/settings');
		break;
}


