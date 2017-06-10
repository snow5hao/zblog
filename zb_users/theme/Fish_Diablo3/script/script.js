$(function(){
	$('#top-icon-light').click(function(){
		top_light();
	});
	$('#foot-icon-light').click(function(){
		foot_light();
	});
	
	$(".searchSide :text").addClass("ipt");
	$(".searchSide :submit").addClass("btn").val("");
	
	$(".function_t").append("<span class='icn'></span>");
	
	//TOP
	$(window).scroll(function() {		
		if($(window).scrollTop() >= 100){ //向下滚动像素大于这个值时，即出现
			$('.gotop').fadeIn(300); //淡入的时间，越小出现的越快~
		}else{    
			$('.gotop').fadeOut(300); //淡出的时间，越小消失的越快~
		}  
	});
	$('.gotop').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);}); //动画停留时间，越小消失的越快~
	
})

function top_light(){
	var nav_light = $('#top-icon-light');
	
	if(nav_light.is('.activited')){
		nav_light.toggleClass('activited');
	}else{
		nav_light.addClass('activited');
	}
}
function foot_light(){
	var nav_light = $('#foot-icon-light');
	
	if(nav_light.is('.activited')){
		nav_light.toggleClass('activited');
	}else{
		nav_light.addClass('activited');
	}
}
