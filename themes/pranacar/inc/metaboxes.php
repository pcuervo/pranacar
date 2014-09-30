<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		add_meta_box( 'contenido', 'Contenido Neto', 'contenido_meta_callback', 'catalogo-pt', 'side', 'high' );

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function contenido_meta_callback($post){
		$contenido = get_post_meta($post->ID, '_contenido_meta', true);
		wp_nonce_field(__FILE__, '_contenido_meta_nonce');
		$contenido_en = get_post_meta($post->ID, '_contenido_en_meta', true);
		wp_nonce_field(__FILE__, '_contenido_en_meta_nonce');
		echo "<label class='widefat' for='contenido'>Español:</label>";
		echo "<input type='text' class='widefat' id='contenido' name='_contenido_meta' value='$contenido'/>";
		echo "<label class='widefat' for='contenido_en'>Inglés:</label>";
		echo "<input type='text' class='widefat' id='contenido_en' name='_contenido_en_meta' value='$contenido_en'/>";
	}



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id))
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE )
			return $post_id;


		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) )
			return $post_id;


		if ( isset($_POST['_contenido_meta']) and check_admin_referer(__FILE__, '_contenido_meta_nonce') ){
			update_post_meta($post_id, '_contenido_meta', $_POST['_contenido_meta']);
		}

		if ( isset($_POST['_contenido_en_meta']) and check_admin_referer(__FILE__, '_contenido_en_meta_nonce') ){
			update_post_meta($post_id, '_contenido_en_meta', $_POST['_contenido_en_meta']);
		}


		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		}*/


	});


// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////