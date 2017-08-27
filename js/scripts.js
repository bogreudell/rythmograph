(function ($, root, undefined) {
      $(function() {
        $("#menu-item-90").click(function(e) {
           $("nav").toggleClass("mobile-open")
        })
      })

	$(function () {
		'use strict';

		// grab url parameters
		var getUrlParameter = function getUrlParameter(sParam) {
		    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
		        sURLVariables = sPageURL.split('&'),
		        sParameterName,
		        i;

		    for (i = 0; i < sURLVariables.length; i++) {
		        sParameterName = sURLVariables[i].split('=');

		        if (sParameterName[0] === sParam) {
		            return sParameterName[1] === undefined ? true : sParameterName[1];
		        }
		    }
		};

		// test if page has body class
		if( $('body').hasClass('contact') ){
			var $subject = getUrlParameter('subject')

			$('input#subject').attr('value', $subject)
		} else {
			console.log('This is not the contact page.')
		}
	});
})(jQuery, this);
