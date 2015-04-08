
var currentPanel = 1;
var totalPanels = 0;
var autoPlay = true;
var timePassed = 0;
var timeToChange = 3;

function autoAdvance(){
	
	if (window.timePassed == window.timeToChange){
		window.timePassed = 0;
		if(window.currentPanel == window.totalPanels){
			currentPanel = 0;
		}
		if (autoPlay == true){
			$('.marquee_nav a.marquee_nav_item:nth-child('+(window.currentPanel+1)+')').trigger('click');
		}
	}else{
		window.timePassed += 1;
	}
}

$(document).ready(function(){

	setInterval(autoAdvance, 1000);

	$('.marquee_container').hover(
		function(){
			window.autoPlay = false;
			$(this).removeClass('autoplay');
		},
		function (){
			window.autoPlay = true ;
			window.timePassed = 0; 
			$(this).addClass('autoplay');

		}

		);

		//links
	$('.marquee_panels .marquee_panel').each(function(index){
		$('.marquee_nav').append('<a class="marquee_nav_item"></a>' );
		totalPanels = index + 1;
		$('.totalPanels').html('totalPanels = '+totalPanels);
	
	}); 
	
	// Generate Photo 
	$('img.marquee_panel_photo').each(function(index){
		var photoWidth = $('.marquee_container').width();
		var photoPosition = index * photoWidth;
		$('.marquee_photos').append('<img class="marquee_photo" style="left: '+photoPosition+'" src="'+$(this).attr('src')+'" alt="'+$(this).attr('alt')+'" width="960" height="230" />');
		$('.marquee_photos').css('width', photoPosition+photoWidth);
	});



	 $('.marquee_nav a.marquee_nav_item').click(function(){

	 	$('.marquee_nav a.marquee_nav_item').removeClass('selected');
	 	$(this).addClass('selected');


	 	var navClicked = $(this).index();
	 	var marqueeWidth =$('.marquee_container').width();
	 	var distanceToMove = marqueeWidth*(-1); 
	 	var newPhotoPosition = navClicked*distanceToMove + 'px';
	 	window.currentPanel = navClicked +1;
	 	$('.currentPanel').html('currentPanel ='+window.currentPanel);

	 	$('.marquee_photos').animate({left:newPhotoPosition},1000);

	 });
	 $('.marquee_panels img').imgpreload(function(){
	 		 initializeMarquee();

	 });
});


function initializeMarquee(){

	$('.marquee_nav a.marquee_nav_item:first').addClass('selected');
	$('.marquee_photos').fadeIn(500);
}







