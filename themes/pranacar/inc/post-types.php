<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// CATALOGO
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
			'rewrite'            => array( 'slug' => 'catalogo-pt' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'catalogo-pt' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'catalogo-pt', $args );


		// NUESTRAS CAPACIDADES
		$labels = array(
			'name'          => 'Nuestras Capacidades',
			'singular_name' => 'Nuestras Capacidades',
			'add_new'       => 'Nueva Nuestras Capacidades',
			'add_new_item'  => 'Nueva Nuestras Capacidades',
			'edit_item'     => 'Editar Nuestras Capacidades',
			'new_item'      => 'Nueva Nuestras Capacidades',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Nuestras Capacidades',
			'search_items'  => 'Buscar Nuestras Capacidades',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Nuestras Capacidades'
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'nuestras-capacidades' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'nuestras-capacidades', $args );

		// ¿QUÉ OFRECEMOS?
		$labels = array(
			'name'          => '¿Qué ofrecemos?',
			'singular_name' => '¿Qué ofrecemos?',
			'add_new'       => 'Nueva entrada ¿Qué ofrecemos?',
			'add_new_item'  => 'Nueva entrada ¿Qué ofrecemos?',
			'edit_item'     => 'Editar ¿Qué ofrecemos?',
			'new_item'      => 'Nueva entrada ¿Qué ofrecemos?',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver ¿Qué ofrecemos?',
			'search_items'  => 'Buscar ¿Qué ofrecemos?',
			'not_found'     => 'No se encontro',
			'menu_name'     => '¿Qué ofrecemos?'
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'que-ofrecemos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'que-ofrecemos', $args );

		// HISTORIA
		$labels = array(
			'name'          => 'Historia',
			'singular_name' => 'Historia',
			'add_new'       => 'Nueva entrada Historia',
			'add_new_item'  => 'Nueva entrada Historia',
			'edit_item'     => 'Editar Historia',
			'new_item'      => 'Nueva entrada Historia',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Historia',
			'search_items'  => 'Buscar Historia',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Historia'
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'historia' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'historia', $args );

		// ACERCA DE
		$labels = array(
			'name'          => 'Acerca De',
			'singular_name' => 'Acerca De',
			'add_new'       => 'Nueva entrada Acerca De',
			'add_new_item'  => 'Nueva entrada Acerca De',
			'edit_item'     => 'Editar Acerca De',
			'new_item'      => 'Nueva entrada Acerca De',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Acerca De',
			'search_items'  => 'Buscar Acerca De',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Acerca De'
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'acerca-de' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'acerca-de', $args );

		// NUESTROS PRODUCTOS
		$labels = array(
			'name'          => 'Nuestros productos',
			'singular_name' => 'Nuestros productos',
			'add_new'       => 'Nueva entrada Nuestros productos',
			'add_new_item'  => 'Nueva entrada Nuestros productos',
			'edit_item'     => 'Editar Nuestros productos',
			'new_item'      => 'Nueva entrada Nuestros productos',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Nuestros productos',
			'search_items'  => 'Buscar Nuestros productos',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Nuestros productos'
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'nuestros-productos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'nuestros-productos', $args );
	});