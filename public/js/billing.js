function run(myVue){
	if ( $('#include-billing-js').length !== 0 ) {
		// (function(){

			var StripeBilling = {
				init: function() {
					this.form = $('#billing-form');
					this.submitButton = this.form.find('input[type=submit]');
					this.submitButtonValue = this.submitButton.val();

						var stripeKey = $('meta[name="publishable-key"]').attr('content');
						Stripe.setPublishableKey(stripeKey);

					this.bindEvents();

				},

				bindEvents: function() {

					this.form.on('submit', $.proxy(this.sendToken, this));

				},

				sendToken: function(event) {
					this.submitButton.val('One moment').prop('disabled', true);
					Stripe.createToken(this.form, $.proxy(this.stripeResponseHandler, this));
					event.preventDefault();
				},
				

				
				stripeResponseHandler: function(status, response) {
					console.log(status, response);
				
					if (response.error) {
						this.form.find('.payment-errors').show().text(response.error.message);
						return this.submitButton.prop('disabled', false).val(this.submitButtonValue);
					}
					 // console.log(Auth::User);
					$('<input>', {
						type: 'hidden',
						name: 'stripe-token', 
						value: response.id	
					}).appendTo(this.form);


					alert('Thanks for funding this brew!');
					console.log( myVue.$data.user.user_id );
					console.log(status, response);

					this.form[0].submit();
					

					// console.log(status, response);


				}
			};	


		StripeBilling.init();

		// })();
	}
}
module.exports = run;
