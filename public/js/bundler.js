$(document).ready(function() {

	"use strict";


	// require('../js/master.js');

	/*
	 *	The Vue Object contains all the information
	 *	returned from the server, 
	 *	user info, 
	 *	beer info for infinate scrolling,
	 *	if user is logged in or not
	 *	and a hand full of methods for seamless UX
	 */ 
	var myVue = require('../js/myVue.js');

	/*
	 *	Contains the JS for comunicating with 
	 *	Facebook and calls methods on myVue
	 *	in order to transision from verification
	 *	from facebook to logging in thew an ajax
	 */
	 
	var fbLogin = require('../js/facebook.js');
	fbLogin(myVue);

	var homepage = require('../js/homepage.js');
	homepage(myVue);

	var beerlist = require('../js/beerlist.js');
	beerlist(myVue);

	var pitchTabs = require('../js/pitchesTabs.js');
	pitchTabs(myVue);

	var disqus = require('../js/disqusPitches.js');
	disqus(myVue);

	var billing = require('../js/billing.js');
	billing(myVue);

	var beer = require('../js/beer.js');
	beer(myVue);

	/*
	 *	First test of infanate scroll
	 *	Calls Methods on myVue,
	 *	for this reason myVue has to be passed as a perametter
	 */
	// var testing = require('../js/test.js');
	// testing(myVue);

	// require('../js/homepage.js');

	// require('../js/beer.js');

	// require('../js/test.js');

	// require('../js/billing.js');


























});