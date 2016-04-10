define(function(require) {
	var $ = require('jquery');
	var elgg = require('elgg');
	require('jquery.multiselect');

	var target = $("#target");

	$("#select-context").multiselect({
		noneSelectedText: elgg.echo("river_addon:select:context"),
		selectedText: elgg.echo("river_addon:select:selected"),
		checkAllText: elgg.echo("river_addon:select:check"),
		uncheckAllText: elgg.echo("river_addon:select:uncheck"),
		selectedList: 2
	});

	$("#select-context").multiselect().bind("multiselectclick multiselectcheckall multiselectuncheckall",
		function( event, ui ){
			var checkedValues = $.map($(this).multiselect("getChecked"), function( input ){
				return input.value;
			});

			elgg.action('river_addon/context', {
				dataType:'json',
				data:{
					selected: checkedValues.join(',')
				}
			});

			if (checkedValues.length) {
				target.addClass("sidebar").html(checkedValues.join(', '));
			} else {
				target.removeClass("sidebar").html(elgg.echo("river_addon:select:none"));
			}
		}
	).triggerHandler("multiselectclick");

	$('#elgg-module-list').sortable({
		items: 'li',
		handle: '.elgg-handle',
		opacity: 0.6,
		revert: 400,
		update: movemodule
	});

	var movemodule = function(event, ui) {
		var postData = $('#elgg-module-list').sortable('toArray');
		var postStr = postData.join(',');

		elgg.action('river_addon/reorder', {
			moduleorder: postStr
		});
	};
});
