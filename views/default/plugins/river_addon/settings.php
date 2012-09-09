<?php

	// set default values
	if (!isset($vars['entity']->show_thewire)) {
		$vars['entity']->show_thewire = 'no';
	}
	if (!isset($vars['entity']->columns)) {
		$vars['entity']->columns = 'no';
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
		$vars['entity']->show_tagcloud = 'no';
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

echo '<div>';
echo elgg_echo('river_addon:label:columns');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[columns]',
	'options_values' => array(
		'no' => elgg_echo('river_addon:option:two'),
		'yes' => elgg_echo('river_addon:option:three')
	),
	'value' => $vars['entity']->columns,
));
echo '</div>';

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

echo '<div>';
echo elgg_echo('river_addon:label:icon');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_icon]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_icon,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:menu');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_menu]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_menu,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:latest:members');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_latest_members]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_latest_members,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:friends');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_friends]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_friends,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:num');
$params = array(
	'name' => 'params[num_friends]',
	'value' => $vars['entity']->num_friends,
	'options' => array(6, 12, 18, 24, 30, 36, 42, 48, 54, 60),
);
echo elgg_view('input/dropdown', $params);
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:friends:online');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_friends_online]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_friends_online,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:ticker');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_ticker]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_ticker,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:count');
echo elgg_view('input/text',array('name' => 'params[tweetcount]','value' => $vars['entity']->tweetcount));
echo '</div>';

echo "<div>" . elgg_echo('river_addon:info:groups') . "</div>";

echo '<div>';
echo elgg_echo('river_addon:label:groups');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_groups]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_groups,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:latest:groups');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_latest_groups]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_latest_groups,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:tagcloud');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_tagcloud]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_tagcloud,
));
echo '</div>';

echo '<div>';
echo elgg_echo('river_addon:label:custom');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_custom]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $vars['entity']->show_custom,
));
echo '</div>';

