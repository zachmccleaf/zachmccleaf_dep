$(document).ready(function() {
	$(window).on("scroll touchmove", function () {
	    $('header').toggleClass('shrink', $(document).scrollTop() > 250);
	});
});
