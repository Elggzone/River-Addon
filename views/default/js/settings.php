//<script>

elgg.provide('elgg.river_addon.settings');

elgg.river_addon.settings.init = function () {

	$('#elgg-module-list').sortable({
		items:		'li',
		handle:		'.elgg-handle',
		opacity:	0.6,
		revert: 	400,
		update:		elgg.river_addon.settings.movemodule
	});
}
 
elgg.river_addon.settings.movemodule = function(event, ui) {

	var postData = $('#elgg-module-list').sortable('toArray');
	var postStr = postData.join(',');

	elgg.action('river_addon/reorder', {
		moduleorder: postStr
	});
	
}
elgg.register_hook_handler('init', 'system', elgg.river_addon.settings.init, 1000);
