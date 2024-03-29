$(document).ready(function(){
	//toggler btn
	$('.navbar-toggler').click(function(){
		$('.navbar-toggler').toggleClass('change')
	})
	$(window).scroll(function(){
		let position = $(this).scrollTop();
		if(position>=718){
			$('.navbar').addClass('navbar-background');
			$('.navbar').addClass('fixed-top');
		}
		else{
			$('.navbar').removeClass('navbar-background');
			$('.navbar').removeClass('fixed-top');
		}
	})
	
	$('.header-link, #back-to-top').click(function(link){
		link.preventDefault();
		let target = $(this).attr('href');
		
		$('html, body').stop().animate({
			scrollTop: $(target).offset().top - 25
		},3000);
	})
	
	$(window).scroll(function(){
		let position = $(this).scrollTop();
		if(position>=718){
			$('#back-to-top').addClass('scrollTop');
			
		}
		else{
			$('#back-to-top').removeClass('scrollTop');
		}
	})
	
	//ripples
	$("#header, .info").ripples({
		dropRadius: 1,
		perturbance: 0.02,
		
	});
	//magnific popup
	$('.parent-container').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
	gallery:{
		enabled: true
	}
    // other options
});
	
});