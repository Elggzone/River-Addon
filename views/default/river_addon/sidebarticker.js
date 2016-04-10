define(function(require) {
	require('jquery.sudoSlider');

	var sudoSlider = $(".tickerclass").sudoSlider({
		speed: 1000,
		prevNext: false,
		fade: false,
		vertical:true,
		continuous:true,
		auto:true,
		pause: 10000
	});
});
