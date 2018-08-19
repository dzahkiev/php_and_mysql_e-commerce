$(document).ready(function(){
	
	//Fix Errors - http://www.learningjquery.com/2009/01/quick-tip-prevent-animation-queue-buildup/
	
	//Remove outline from links
	$("div.menu_g a").click(function(){
		$(this).blur();
	});
	
	//When mouse rolls over
	$("div.menu_g").mouseover(function(){
		$(this).stop().animate({height:'45px'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
	
	//When mouse is removed
	$("div.menu_g").mouseout(function(){
		$(this).stop().animate({height:'35px'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
	
 
	
	$('#da-slider').cslider({
		autoplay	: true,
		bgincrement	: 850,
		interval    : 8000
				 
		
	});
	

});