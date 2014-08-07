<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////


	add_action( 'init', 'custom_taxonomies_callback', 0 );

	function custom_taxonomies_callback(){

		// Catálogo
		if( ! taxonomy_exists('tax-catalogo')){

			$labels = array(
				'name'              => 'Categoría catálogo',
				'singular_name'     => 'Categoría catálogo',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Categoría catálogo',
				'update_item'       => 'Actualizar Categoría catálogo',
				'add_new_item'      => 'Nuevo Categoría catálogo',
				'new_item_name'     => 'Nombre Nuevo Categoría catálogo',
				'menu_name'         => 'Categoría catálogo'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'tax-catalogo' ),
			);

			register_taxonomy( 'tax-catalogo', 'catalogo-pt', $args );
		}


		// TERMS
		/*if ( ! term_exists( 'Carlos Fuentes', 'autor' ) ){
			wp_insert_term( 'Carlos Fuentes', 'autor' );
		}*/
	}
