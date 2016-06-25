// function run(myVue){

	$(window).scroll(function() {
		// if( myVue.$data.infinateFlag !== false )
		// {
		    if($(window).scrollTop() + $(window).height() == $(document).height() ) {
		    	infiniteScroll();

		    }
			// myVue.$data.infinateFlag = false;
		// }
	});

	function infiniteScroll() {

		var offset = myVue.$data.beers.length;
		console.log(offset);
	        $.get("/beerpage/" + offset, function(data) {
                data.forEach(function(element) {
                    myVue.$data.beers.push(element);
                    showBeerCalculatedRating();
                    showUserRatingInput();

                });

            });

	}


	infiniteScroll();


// }

// module.exports = run;