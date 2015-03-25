
//progress bar animation (initiate WOW.js)
new WOW().init();


//header shrinkage
$(document).ready(function() {
	$(window).on("scroll touchmove", function () {
	    $('header').toggleClass('shrink', $(document).scrollTop() > 250);
  });  
});



//scroll to top function
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

//placeholder ie fix
$('[placeholder]').focus(function() {
  var input = $(this);
  if (input.val() == input.attr('placeholder')) {
    input.val('');
    input.removeClass('placeholder');
  }
}).blur(function() {
  var input = $(this);
  if (input.val() == '' || input.val() == input.attr('placeholder')) {
    input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
}).blur().parents('form').submit(function() {
  $(this).find('[placeholder]').each(function() {
    var input = $(this);
    if (input.val() == input.attr('placeholder')) {
      input.val('');
    }
  })
});



