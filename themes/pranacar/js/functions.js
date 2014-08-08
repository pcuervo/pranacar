(function($){

	"use strict";

	$(function(){

		$('nav a').on('click', function(e){
			e.preventDefault();
			$('nav a').removeClass('active');
			$(this).addClass('active');
			var seccion = $(this).data('seccion'),
				seccionID = '#'+seccion;
			scrollTo( $(seccionID) );
		});

		$('.sub-menu .contacto').on('click', function(e){
			e.preventDefault();
			var seccion = $(this).data('seccion'),
				seccionID = '#'+seccion;
			scrollTo( $(seccionID) );
		});

		$('.categoria').on('click', function(){
			toggleProductos( $(this).find('ul') );
		});

		$('#btn-movil').on('click', function(){
			abrirMenu( $('nav.menu') );
		});

		creaMapa(19.388209, -99.250840);

	});

	function toggleProductos(elemento) {
		if( elemento.hasClass('hide') ){
			var num = $('.categoria ul').length;
			$('.categoria ul').addClass('hide').slideUp('normal', function(){
				if( --num > 0 ) return;
				elemento.slideDown('fast', function(){
					$(this).removeClass('hide');
					scrollTo(elemento);
				});
			});

		} else {
			$('.categoria ul').slideUp().addClass('hide');
		}
	}

	function scrollTo(elemento){
		var divPosicion = elemento.offset().top,
			divPosicion = divPosicion - 100;
		$('html, body').animate({scrollTop: divPosicion}, 500);
	}

	function abrirMenu(menu){
		menu.slideToggle('fast');
	}

	function creaMapa (lat, lng){
		var styles = [
			{
			  stylers: [
				{ hue: "#3a9b57" }
			  ]
			}
		];

		function initialize(latitude, longitude) {
			var notMobile = $(document).width() > 480 ? true : false;
			var lat = latitude;
			var lng = longitude;
			var centro = new google.maps.LatLng(lat, lng);
			var mapOptions = {
				zoom: 17,
				center: centro,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: styles,
				scrollwheel: false,
				draggable: notMobile
			}
			var map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
			var marker = new google.maps.Marker({
			    position: centro,
			    map: map,
			    title:"Constructora Dycemo"
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize(lat, lng));
	}


})(jQuery);