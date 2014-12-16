
/*
		proscom.ru
		Simple Communication
*/


$(document).ready(function() {
	// stage-change-text
	$(".js-change-stage-text .circle").hover(
		function() {
			var stageId = $(this).data("stage");
			var stageBox = $(".js-stage-text");
			var stageElement = stageBox.find(".stage-text");
			var stageCurrentElement = stageBox.find("[data-stage='" + stageId + "']")

			stageElement.stop().hide()
			stageCurrentElement.stop().fadeIn();
		}, function() {}
	)
	
	//	#carousel
	var owl = $("#owl-carousel");
 
	owl.owlCarousel({
			items : 10, //10 items above 1000px browser width
			itemsDesktop : [1000,5], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,3], // betweem 900px and 601px
			itemsTablet: [600,2], //2 items between 600 and 0
			itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});
	// Custom Navigation Events
	$(".next").click(function(){
		owl.trigger('owl.next');
	})
	$(".prev").click(function(){
		owl.trigger('owl.prev');
	})
	$(".play").click(function(){
		owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
	})
	$(".stop").click(function(){
		owl.trigger('owl.stop');
	})
});



$(function() {
	$(".share__link_fb").click(function() {
		Share.facebook(document.URL);
	});
	
	$(".share__link_vk").click(function() {
		Share.vkontakte(document.URL);
	});
	
	$(".share__link_tw").click(function() {
		Share.twitter(document.URL);
	});
});