
/*
	proscom.ru
	Simple Communication
*/


$(document).ready(function() {

	//	Page article content nav
	// ==================================================
	$(".box-page-nav a").on("click", function(e){
		var thisis = $(this);
		var currentLi = thisis.closest("li");
		var child = thisis.closest("li").find("ol li");
		target = $(e.target);
		//e.preventDefault();

		if(target.hasClass("cat")) {
			if(thisis.closest("li").hasClass("open")) {
				currentLi.removeClass("close open")
				child.slideUp();
			} else {
				currentLi.addClass("open")
				child.slideDown();
			}
		}
	})
	
	// Открытие / закрытие блоков
	$(".side-extend .bcat-name .toogle").click(function (e) {
		e.preventDefault();
		var thisis = $(this);
		var item = thisis.closest(".bcat");

		if(item.hasClass("active")) {
			thisis.find(".toogle").text("+");
			item.removeClass("active");
			item.find(".bcat-con").slideUp();
		} else {
			item.addClass("active");
			thisis.find(".toogle").text("-");
			item.find(".bcat-con").slideDown();
		}
	});

	// Открытие второго меню
	$('.sidebar .menu a[data-menu]').on("click", function(e){
		e.preventDefault()
		var thisis = $(this);
		var menu = thisis.data("menu");
		
		sidebarHeight()
		
		$(".sidebar .menu li").removeClass("active")
		thisis.closest("li").addClass("active")
		$(".side-extend-fix").stop().fadeIn()
		$('.sidebar .side-extend').stop().fadeOut(500);
		$('.sidebar .side-extend[data-menu="'+menu+'"]').stop().fadeIn(300)

	})

	// Закрытие второго меню
	$(".sidebar .side-extend .bname .close").on("click", function(e){
		e.preventDefault()
		var thisis = $(this)
		
		$(".side-extend-fix").stop().fadeOut()		
		$(".sidebar .menu li").removeClass("active")
		thisis.closest(".side-extend").stop().fadeOut()
	})

	// Закрытие по клавише Esc 
	$(document).keyup(function(e){
		if (e.keyCode == 27) {
			$(".side-extend-fix").stop().fadeOut()		
			$(".sidebar .menu li").removeClass("active")
			$(".sidebar .side-extend").stop().fadeOut()
		}
	})

	// ==================================================
	
	$(".js-edit-link").click(function (e) {
		e.preventDefault();
		var thisis = $(this);
		var box = thisis.closest(".js-edit-item-box");
		var item = box.find(".js-edit-item");

		if(item.is(':visible')) {
			item.slideUp();
		} else {
			item.slideDown();
		}
	});

	// ==================================================

	$(".js-edit-link-replace").click(function (e) {
		e.preventDefault();
		var thisis = $(this);
		var box = thisis.closest(".js-edit-item-box");
		var edit = box.find(".js-edit-item");
		var item = box.find(".js-item");

		if(edit.is(':visible')) {
			edit.hide();
			item.css({display: "table"});
		} else {
			edit.css({display: "table"});
			item.hide();
		}
	});

	// ==================================================
	
	$(".js-show-objects").click(function (e) {
		e.preventDefault();
		var thisis = $(this);
		var item = thisis.closest(".js-object-box");
		var content = item.find(".js-object-con");

		if(item.hasClass("active")) {
			item.removeClass("active");
			content.slideUp();
		} else {
			item.addClass("active");
			content.slideDown();
		}
	});


	// Закрытие по клику в любой части экрана
	// ==================================================
	$(document).click(function(e){
		if ($('.sidebar .side-extend:visible').length && !$(e.target).closest('.sidebar').length){
			$(".side-extend-fix").stop().fadeOut()		
			$(".sidebar .menu li").removeClass("active")
			$(".sidebar .side-extend").stop().fadeOut()
		}

		if( $('.js-orders-pop:visible').length && 
			!$(e.target).closest('.js-orders-pop').length && 
			!$(e.target).closest('.js-show-orders').length ) {
			$(".js-orders-pop").fadeOut();
		}
	})






	// ==================================================
	//	ХОВЕР ПРИ НАВЕДЕНИИ
	// ==================================================
	$(".hoverbg").hover(
		function() {
			$(this).find(".icon .act").stop().fadeIn(300)
		}, function() {
			$(this).find(".icon .act").stop().fadeOut(300)
		}
	)

	// ==================================================
	
	$(".js-show-contacts").on("click", function(e){
		e.preventDefault()
		var thisis = $(this);
		var box = thisis.parent();
		
		thisis.hide();
		$(".js-contacts-box").fadeIn();
	})

	// ==================================================
	
	if ( $.isFunction($.fn.datetimepicker) ) {
		$('.calendar-widget-pop').datetimepicker({
			lang:'ru',
			timepicker:false,
			format:'d.m.Y',
			todayButton: false,
		});
		$('.js-open-cal').click(function(){
			$(this).closest(".line").find(".js-calendar-widget").datetimepicker('show');
		});

		$('.calendar-widget-pop2').datetimepicker({
			lang:'ru',
			timepicker:false,
			format:'d.m.Y',
			todayButton: false,
		});

		$('.calendar-widget').datetimepicker({
			lang:'ru',
			timepicker:false,
			format:'d.m.Y',
			inline:true,
			todayButton: false,
		});
	}
	


	// ==================================================
	//	СЛАЙДЕРЫ
	// ==================================================
	if ( $.isFunction($.fn.lightSlider) ) {
		$(".slider-index").lightSlider({
			item: 1,
			loop: true,
			auto: true,
			pause: 4000,
			cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)',
				swipeThreshold: 100,
		});
	}


	// ==================================================
	//	ГРАФИКИ - ПИРОЖКИ
	// ==================================================
	if ( $.isFunction($.fn.easyPieChart) ) {
		$(function() {
			$('.js-charts-visits').easyPieChart({
				barColor: '#60c6cf',
				trackColor: '#e5e5e5',
				lineWidth: '5',
				size: "57",
				lineCap: "butt",
				scaleColor: "transparent",
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});
		});
		$(function() {
			$('.js-charts-members').easyPieChart({
				barColor: '#989cff',
				trackColor: '#e5e5e5',
				lineWidth: '5',
				size: "57",
				lineCap: "butt",
				scaleColor: "transparent",
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});
		});
		$(function() {
			$('.js-charts-sales').easyPieChart({
				barColor: '#55c69e',
				trackColor: '#e5e5e5',
				lineWidth: '5',
				size: "57",
				lineCap: "butt",
				scaleColor: "transparent",
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});
		});
	}



	// ==================================================
	//	ТАБЫ
	// ==================================================
});