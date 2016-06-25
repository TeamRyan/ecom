function run(myVue){
	if( $('#include-beerlist-js').length !== 0 ) {

		function hideDescriptionOfBeer() {
			$('.description-toggle').each(function() {
					($(this).children().hide())
				
			});
		}
		function slideDescriptionOfBeer() {
			$('.infinite-container').on('click', '.description-button', function() {
				($(this.previousElementSibling.children[0].children)).slideToggle();
			})
		}


		function showBeerCalculatedRating() {
			$('.stars').each(function() {
				$calculatedRating = ($(this).data('ratingId'));
				$percent = $calculatedRating * 20;
				// console.log($percent);
				($(this).children().last().css('width', $percent + '%'));
			})
		}
		showBeerCalculatedRating();
		function showUserRatingInput() {
			$('.stars').click(function() {
				$target = event.target.innerHTML * 20;
				($(this).children().last().css('width', $target + '%'))
			})
		}
		showUserRatingInput();
		function getBeerIdAndStarsNumber() {
			$('.stars').click(function(e) {
				if (myVue.$data.loggedIn == 'true') {
					$idOfBeerStars = ($(this).data('starId'));
					$ratingNumber = event.target.innerHTML;
					sendRating($idOfBeerStars, $ratingNumber);
				} else {
					myVue.clearErrors();
					$('#login_modal').modal('show');
				}
			});
		}
			getBeerIdAndStarsNumber();

		function sendRating(id, ratingNumber) {

			$.get("/beers/" + id + "/" + ratingNumber , function(data){
				console.log(ratingNumber)
			}).done(function(data) {
				console.log(data);
			});
		}


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

		function searchClicked(){
			myVue.$data.beers = [];
			$('#hidden-search').val( $('#search').val() );
			infiniteScroll();
		}
		function searchEntered() {
			if (window.event.keyCode == 13)
		    {
		        myVue.$data.beers = [];
				$('#hidden-search').val( $('#search').val() );
				infiniteScroll();
		    }
		}


		function infiniteScroll() {

			var offset = myVue.$data.beers.length;
			var search = $('#hidden-search').val();

		        $.get("/beerpage/" + offset + "/" + search, function(data) {
		            data.forEach(function(element) {
		                myVue.$data.beers.push(element);

		            });
		            setTimeout( function () {
		                showBeerCalculatedRating();
		                showUserRatingInput();
		                getBeerIdAndStarsNumber();
		                hideDescriptionOfBeer();
		            },500);
		        });

		}

		$('#search').keypress(function() {
			searchEntered();
		});

		$('#search-button').click(function() {
			searchClicked();
		});

		slideDescriptionOfBeer();


		infiniteScroll();
	}
}

module.exports = run;