$(document).ready(function() {
  $('h2.entry-title').fitText(1.3);
  $('h2, h3, h4').fitText(1.3);
  
  //setup_nav();
});

function setup_nav()
	{
		// elements
		var nav = $('#nav');
		var nav_ul = $('#nav ul');
		var nav_orig_y = nav.position().top;

		// vars
		var window_y = 0;
		var nav_visible = false;
		
		nav.find('h3').stop().css({'opacity' : '0'});
		
		$(window).scroll(function(){
			
			window_y = $(window).scrollTop();
			
			// fake nav
			if(window_y >= 135)
			{
			  if(!nav_visible) {
			    nav.animate({top: "0"}, 700, "easeOutBounce");
			    nav_visible = true;
			  }
			}
			else if(window_y < 135)
			{
			  if(nav_visible) {
			    nav.animate({top: "-50"}, 700, "easeOutBounce");
			    nav_visible = false;
			  }	
			}
			
			
		
		}).trigger('scroll');
		
		$('.nav a').click(function(){
			
			var id = $(this).attr('data-rel');
			if(!$(id).exists()){
				return true;
			}
			var scroll_y = $(id).offset().top;
			var minus = (id == '#folio') ? 50 : 35;
			
			if($('#folio_single').height() > 0)
			{
				$('#folio_close').trigger('click');
				setTimeout(function(){
					scroll_y = $(id).offset().top;
					$('body, html').stop().animate({'scrollTop' : scroll_y - minus}, 500);
				}, 500);
			}
			else
			{
				$('body, html').stop().animate({'scrollTop' : scroll_y - minus}, 500);
			}
			
			
			
			return false;
			
		});
	}