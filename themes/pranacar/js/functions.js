(function($){

	"use strict";

	$(function(){

		$('nav a').on('click', function(e){
			e.preventDefault();
			var seccion = $(this).data('seccion'),
				seccionID = '#'+seccion;
			scrollTo( $(seccionID) );
		});

		$('.categoria').on('click', function(){
			toggleProductos( $(this).find('ul') );
		});

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

})(jQuery);