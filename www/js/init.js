/*---flexslider initialization---*/
(function() {
	var $window = $(window),
		flexslider = { vars:{} };

	function getGridSize() {
		return (window.innerWidth < 700) ? 2 : 3;
	}
     
	$window.load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: true,
			directionNav: false,
			controlsContainer: $('.flexslider'),
			slideshow: true,
			slideshowSpeed: 5000,
			startAt: 2,
			itemWidth: 326,
			animationLoop: true,
			move: 3,
			minItems: getGridSize(),
			maxItems: getGridSize(),
			start: function (slider) {
				flexslider = slider;
			}
		});
	});
     
	$window.resize(function() {
		var gridSize = getGridSize();

		flexslider.vars.minItems = gridSize;
		flexslider.vars.maxItems = gridSize;
	});
}());
/*--- flexslider initialization End ---*/


$(document).ready(function(){
	/*--- magnificPopup initialization ---*/
	$('.gallery-link-popup').magnificPopup({
		type: 'image',
		removalDelay: 500,
		mainClass: 'mfp-fade popup_image',
		showCloseBtn: true,
		closeMarkup: '<div class="mfp-close">x</div>',
		closeBtnInside: true,
		closeOnContentClick: false,
		closeOnBgClick: true,
		alignTop: false,
		fixedContentPos: true,
		gallery: {
			enabled: true
		}
	});

	$('.footer-feedback').magnificPopup({
		type:'inline',
		removalDelay: 500,
		mainClass: 'mfp-fade popup_inline',
		showCloseBtn: true,
		closeMarkup: '<div class="mfp-close">x</div>',
		closeBtnInside: true,
		closeOnContentClick: false,
		closeOnBgClick: true,
		alignTop: false,
		fixedContentPos: true
	});
	/*--- magnificPopup initialization End ---*/
});	