$(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav-pills a', function() {
			clickEvent = true;
			$('.nav-pills li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav-pills').children().length -1;
			var current = $('.nav-pills li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav-pills li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});

//
//Click event for menu courses information on education page
//
jQuery(document).ready(function($)
{
  //$("#author_bio_wrap_toggle").click(function()
  $(".arrow").click(function()
  {   
    $("#author_bio_wrap").slideToggle( "slow");
    $(this).toggleClass("glyphicon glyphicon-menu-down glyphicon glyphicon-menu-up");
  });
    
  $(".arrow1").click(function()
  {   
    $("#author_bio_wrap1").slideToggle( "slow");
    $(this).toggleClass("glyphicon glyphicon-menu-down glyphicon glyphicon-menu-up");
  });
    
  $(".arrow2").click(function()
  {   
    $("#author_bio_wrap2").slideToggle( "slow");
    $(this).toggleClass("glyphicon glyphicon-menu-down glyphicon glyphicon-menu-up");
  });

});