<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// CATÁLOGO
		if( ! get_page_by_path('catalogo') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Catálogo',
				'post_name'   => 'catalogo',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// CONTACTO RECIBIDO
		if( ! get_page_by_path('contacto-recibido') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto recibido',
				'post_name'   => 'contacto-recibido',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
