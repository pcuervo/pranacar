<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Acerca
		$labels = array(
			'name'          => 'Acerca',
			'singular_name' => 'Acerca',
			'add_new'       => 'Nueva Acerca',
			'add_new_item'  => 'Nueva Acerca',
			'edit_item'     => 'Editar Acerca',
			'new_item'      => 'Nueva Acerca',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Acerca',
			'search_items'  => 'Buscar Acerca',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Acerca'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'acerca' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'acerca', $args );

		// Catalogo
		$labels = array(
			'name'          => 'Catálogo',
			'singular_name' => 'Catálogo',
			'add_new'       => 'Nueva Catálogo',
			'add_new_item'  => 'Nueva Catálogo',
			'edit_item'     => 'Editar Catálogo',
			'new_item'      => 'Nueva Catálogo',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Catálogo',
			'search_items'  => 'Buscar Catálogo',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Catálogo'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'catalogo' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'catalogo', $args );

	});