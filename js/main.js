// Opening accordion based on URL
var url = document.location.toString();
if (url.match('#') ) {
    $('#'+url.split('#')[1]).addClass('in');
}

jQuery(document).ready(function($) {

	'use strict';

		$(".our-listing").owlCarousel({
			items: 4,
			navigation: true,
			navigationText: ["&larr;","&rarr;"],
		});


		$('.flexslider').flexslider({
		    animation: "fade",
		    controlNav: false,
		    prevText: "&larr;",
		    nextText: "&rarr;"
		});


		$('.toggle-menu').click(function(){
	        $('.menu-responsive').slideToggle();
	        return false;
	    });

	$("#contactform").submit(function(event) {
		$.post("../functions/acceptContact.php", $(this).serialize());
		alert("Message sent!");
	});
});