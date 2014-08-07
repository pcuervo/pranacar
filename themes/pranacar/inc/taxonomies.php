<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////


	add_action( 'init', 'custom_taxonomies_callback', 0 );

	function custom_taxonomies_callback(){

		// Catálogo
		if( ! taxonomy_exists('catalogo')){

			$labels = array(
				'name'              => 'Catálogo',
				'singular_name'     => 'Catálogo',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Catálogo',
				'update_item'       => 'Actualizar Catálogo',
				'add_new_item'      => 'Nuevo Catálogo',
				'new_item_name'     => 'Nombre Nuevo Catálogo',
				'menu_name'         => 'Catálogo'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'catalogo' ),
			);

			register_taxonomy( 'catalogo', 'catalogo', $args );
		}


		// TERMS
		/*if ( ! term_exists( 'Carlos Fuentes', 'autor' ) ){
			wp_insert_term( 'Carlos Fuentes', 'autor' );
		}*/
	}
