/**
 * River addon river wire js
 */
define(function(require) {
	var $ = require('jquery');
	var elgg = require('elgg');

	$(document).on('submit', 'form[name=elgg-wire]', function(e) {
		var form = $(this);
		var data = form.serialize();

		elgg.action('river_addon/add', {
			data: data,
			success: function(json) {
				var river = $('.elgg-list-river');

				if (river.length < 1) {
					river.append(json.output);
				} else {
					$(json.output).find('li:first').hide().prependTo(river).slideDown(500);
				};

				form.find('textarea').val('');
				$("#thewire-characters-remaining span").html("140");
			}
		});

		e.preventDefault();
	});
});