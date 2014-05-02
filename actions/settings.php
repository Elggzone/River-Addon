<?php
/**
 * River Addon settings save
 */

$plugin = elgg_get_plugin_from_id('river_addon');

$params = get_input('params');
foreach ($params as $k => $v) {
	if (!$plugin->setSetting($k, $v)) {
		register_error(elgg_echo('plugins:settings:save:fail', array('river_addon')));
		forward(REFERER);
	}
}

system_message(elgg_echo('plugins:settings:save:ok', array('river_addon')));
forward(REFERER);
