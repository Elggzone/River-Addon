<?php
/**
 * River Addon settings
 * 
 */

	$plugin = elgg_get_plugin_from_id('river_addon');

	// set default values
	if (!isset($vars['entity']->show_thewire)) {
		$vars['entity']->show_thewire = 'no';
	}
	if (!isset($vars['entity']->show_icon)) {
		$vars['entity']->show_icon = 'sidebar';
	}
	if (!isset($vars['entity']->show_menu)) {
		$vars['entity']->show_menu = 'sidebar';
	}
	if (!isset($vars['entity']->show_latest_members)) {
		$vars['entity']->show_latest_members = 'sidebar_alt';
	}
	if (!isset($vars['entity']->show_comments)) {
		$vars['entity']->show_comments = 'sidebar_alt';
	}
	if (!isset($vars['entity']->tab_order)) {
		$vars['entity']->tab_order = 'default';
	}
	if (!isset($vars['entity']->show_friends)) {
		$vars['entity']->show_friends = 'sidebar_alt';
	}
	if (!isset($vars['entity']->show_friends_online)) {
		$vars['entity']->show_friends_online = 'sidebar_alt';
	}
	if (!isset($vars['entity']->num_friends)) {
		$vars['entity']->num_friends = 12;
	}
	if (!isset($vars['entity']->show_ticker)) {
		$vars['entity']->show_ticker = 'sidebar';
	}
	if (!isset($vars['entity']->tweetcount)) {
		$vars['entity']->tweetcount = '4';
	}
	if (!isset($vars['entity']->show_latest_groups)) {
		$vars['entity']->show_latest_groups = 'sidebar';
	}
	if (!isset($vars['entity']->show_custom)) {
		$vars['entity']->show_custom = 'sidebar_alt';
	}
	if (!isset($vars['entity']->show_groups)) {
		$vars['entity']->show_groups = 'sidebar';
	}
	if (!isset($vars['entity']->show_tagcloud)) {
		$vars['entity']->show_tagcloud = 'sidebar_alt';
	}
	if (!isset($vars['entity']->show_albums)) {
		$vars['entity']->show_albums = 'no';
	}
	$new = 11;
	if (!isset($plugin->neworder) || empty($plugin->neworder) || !preg_match('/(^|,)'. $new .'($|,)/', $plugin->neworder)) {
		$vars['entity']->neworder = '1,2,3,4,5,6,7,8,9,10,11,0';
	}

echo "<div class=\"label\">" . elgg_echo('river_addon:header:general') . "</div>";

echo '<div>';
echo elgg_echo('river_addon:label:taborder');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[tab_order]',
	'options_values' => array(
		'default' => elgg_echo('river_addon:option:default'),
		'friend_order' => elgg_echo('river_addon:option:friend'),
		'mine_order' => elgg_echo('river_addon:option:mine')
	),
	'value' => $vars['entity']->tab_order,
));
echo '</div>';

echo "<div class=\"label\">" . elgg_echo('river_addon:header:appearance') . "</div>";
echo "<div>" . elgg_echo('river_addon:info:columns') . "</div>";

$menu = elgg_get_config('menus');
$menu = $menu['site'];

$selected = $plugin->three_column_context;
$selected = explode(",", $selected);

echo '<div>';
echo elgg_echo('river_addon:label:columns');
echo '<select id="select-context" class="elgg-input-select" multiple="multiple">';
foreach ($menu as $item) {
	if (in_array($item->getName(), $selected)) {
		echo "<option selected=\"selected\" value=\"{$item->getName()}\">" . $item->getText() . "</option>";
	} else {
		echo "<option value=\"{$item->getName()}\">" . $item->getText() . "</option>";
	}		
}
echo '</select>';
echo '</div>';

echo "<div class=\"no\" id=\"target\"></div>";

echo '<div>';
echo elgg_echo('river_addon:label:thewire');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_thewire]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
	),
	'value' => $vars['entity']->show_thewire,
));
echo '</div>';

echo "<div class=\"label\">" . elgg_echo('river_addon:header:sidebar') . "</div>";
echo "<div>" . elgg_echo('river_addon:info:modules') . "</div>";

echo '<div class="elgg-modules">';		
	$modules = elgg_view('admin/settings/river_addon/modules');
	echo $modules;
echo "</div>";

echo "<div>" . elgg_echo('river_addon:info:groups') . "</div>";
