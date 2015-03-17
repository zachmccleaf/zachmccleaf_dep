$(document).ready(function() {
	$(window).on("scroll touchmove", function () {
	    $('header').toggleClass('shrink', $(document).scrollTop() > 250);
  });  
});

$(function(){
  var prevScroll = 0,
      curDir = 'down',
      prevDir = 'up';
  
  $(window).scroll(function(){
    	if($(this).scrollTop() >= prevScroll){
          curDir = 'down';
          if(curDir != prevDir){
          $('.scrolltop').stop();
    	  	$('.scrolltop').animate({ bottom: '-50px' }, 300);
          prevDir = curDir;
          }
      } else {
          curDir = 'up';
          if(curDir != prevDir){
          $('.scrolltop').stop();
          $('.scrolltop').animate({ bottom: '0px' }, 300);
          prevDir = curDir;
          }
      }
      prevScroll = $(this).scrollTop();
  });
})
