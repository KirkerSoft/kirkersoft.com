;function() {	
	$('#slides').slides({
		effect: 'fade',
		fadeSpeed:700,
		preload: true,
		play: 7000,
		pause: 2000,
		generatePagination: true,
		crossfade: true,
		hoverPause: true,
		animationStart: function(current){
			$('.caption').animate({left:-900},300);
			if (window.console && console.log) {console.log('animationStart on slide: ', current);};
		},
		animationComplete: function(current){
			$('.caption').animate({left:0},300);
			if (window.console && console.log) {console.log('animationComplete on slide: ', current);};
		},
		slidesLoaded: function() {$('.caption').animate({left:0},300);}
	});
});		
