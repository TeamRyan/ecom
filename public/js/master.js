
	$('#beer-of-day').click(function() {
		window.location.href='/beers/9';
	});
	$('#top-rated').click(function() {
		window.location.href='/beers';
	});
	$('#brewery-pitches').click(function() {
		window.location.href='/pitches';
	});
	$('#link-to-seasonal').click(function() {
		window.location.href='/seasonal';
	});
	function reSizeBeerTrivia() {
		var win = $(this);
		if (win.height() < 1380 && win.height() > 767) {
			$('#trivia-resize').css("padding", "0px");
		}
		if (win.height() < 767) {
			$('#trivia-inner').css("font-size", "5px");
			$('#beer-trivia').css("font-size", "5px");
		} 
	}
	function reSizeSeasonalBeerPost() {
		var win = $(this)
		if (win.width() < 767) {
			var text_input = $('#reSizeBeerSeason');
			text_input.css("font-size", "3.7px");
			$('#reSizeHeadingLeft').height(300);
			$('#reSizeHeading').height(300);
		} else if (win.width() >= 1200) {
			var text_input = $('#reSizeBeerSeason');
	    	text_input.css("font-size", "20px");
			$('#reSizeHeadingLeft').height(600);
			$('#reSizeHeading').height(600);
		} else if (win.width() >= 700) {
			var text_input = $('#reSizeBeerSeason');
	    	text_input.css("font-size", "10px");
		}
	$(window).on('resize', function(){
		var win = $(this); //this = window
		//reSizeBeerTrivia();
		//reSizeSeasonalBeerPost();
	});