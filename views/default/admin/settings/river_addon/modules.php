<?php
/**
 * River Addon settings
 */

$plugin = elgg_get_plugin_from_id('river_addon');

echo '<ul id="elgg-module-list" class="elgg-list elgg-list-entity ui-sortable">';

$items = array (
"<li id=\"0\" class=\"$plugin->show_icon\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_icon]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_icon
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_icon') . "</div>
</li>",

"<li id=\"1\" class=\"$plugin->show_menu\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_menu]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_menu
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_menu') . "</div>
</li>",

"<li id=\"2\" class=\"$plugin->show_latest_members\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_latest_members]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_latest_members
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_latest_members') . "</div>
</li>",

"<li id=\"3\" class=\"$plugin->show_friends\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_friends]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_friends
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_friends') . "</div>
</li>",

"<li id=\"4\" class=\"$plugin->show_friends_online\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_friends_online]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_friends_online
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_friends_online') . "</div>
</li>",

"<li id=\"5\" class=\"$plugin->show_ticker\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_ticker]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_ticker
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_ticker') . "</div>
</li>",

"<li id=\"6\" class=\"$plugin->show_groups\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_groups]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_groups
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_groups') . "</div>
</li>",

"<li id=\"7\" class=\"$plugin->show_latest_groups\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_latest_groups]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_latest_groups
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_latest_groups') . "</div>
</li>",

"<li id=\"8\" class=\"$plugin->show_tagcloud\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_tagcloud]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_tagcloud
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_tagcloud') . "</div>
</li>",

"<li id=\"9\" class=\"$plugin->show_custom\">
<div class='elgg-handle'>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span>
<span class='elgg-handle-bar'></span><span class='elgg-handle-bar'></span></div>"
 . elgg_view("input/dropdown", array(
	'name' => 'params[show_custom]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('river_addon:option:sidebar:left'),
		'sidebar' => elgg_echo('river_addon:option:sidebar:right')
	),
	'value' => $plugin->show_custom
)) .  
"<div id='title' class='elgg-state-draggable'>" . elgg_echo('river_addon:label:show_custom') . "</div>
</li>",
);

$ordering = elgg_get_plugin_setting('neworder', 'river_addon');
$ordering = explode(',', $ordering);

foreach ($ordering as $key => $value) {
	echo $items[$value];
}
		
echo "</ul>";