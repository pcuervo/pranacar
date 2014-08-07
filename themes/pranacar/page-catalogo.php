<?php
	get_header();
	$categorias = get_categories();
	foreach ($categorias as $categoria) {
		$slug 	= $categoria->slug;
		$childNombre = $categoria->name;

		if($categoria->parent == 0 ){
			$parentSlug 	= $categoria->slug;
			$categoriaParent = get_category_by_slug( $parentSlug );
			$categoriaParentID = $categoriaParent->cat_ID;
			$parentIDsArray[] = $categoriaParentID;
		}
	}
?>

	<div class="width clearfix catalogo">
		<?php

			foreach ($parentIDsArray as $parentID) {
				$parent = get_category($parentID);
				$parentNombre = $parent->name;
				$parentSlug = $parent->slug;
				?>

				<div id="<?php echo $parentSlug; ?>">
					<h2><?php echo $parentNombre ?></h2>

					<?php
					$argsChildCategorias = array(
						'child_of' => $parentID
					);
					$childCategorias = get_categories( $argsChildCategorias );
					foreach ($childCategorias as $childCategoria) {
						$childID 		= $childCategoria->cat_ID;
						$childSlug 		= $childCategoria->slug;
						$childNombre 	= $childCategoria->name;
					 ?>

						<div class="columna full categoria center">
							<h2><?php echo $childNombre; ?></h2>
							<?php
								$catImage = z_taxonomy_image_url($childID);
								if ( $catImage != '' ){
									echo "<img src='$catImage'/>";
								}
							?>

							<ul class="hide">
								<?php
									$counter = 1;
									$args = array(
										'category_name' 	=> $childSlug,
										'posts_per_page' 	=> -1
									);
									$query = new WP_Query($args);
									if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
									$contenido = get_post_meta($post->ID, '_contenido_meta', true);
								?>
									<li class="columna xmall-12 small-6 large-4">
										<h3 class="full text-center"><?php the_title(); ?></h3>
										<p class="full text-center">Contenido neto: <?php echo $contenido; ?></p>
										<div class="clear"></div>
										<?php the_post_thumbnail( 'medium', array('class' => 'columna xmall-6') ); ?>
										<div class="columna xmall-6"><?php the_content(); ?></div>
									</li>

								<?php
									if($counter %3 == 0) {
										echo '<div class="clear-large"></div>';
									}
									if($counter %2 == 0) {
										echo '<div class="clear-small no-large"></div>';
									}
								?>
								<?php $counter++; endwhile; endif; wp_reset_query(); ?>
							</ul>
						</div>
						<div class="clear"></div>

					<?php } ?>
				</div>
			<?php }?>
	</div>

<?php get_footer(); ?>