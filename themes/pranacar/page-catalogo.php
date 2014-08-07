<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="stylesheet" href="<?php echo THEMEPATH; ?>style-catalogo.css">
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500' rel='stylesheet' type='text/css'>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">

			<header>
				<div class="width clearfix">
					<h1 class="columna xmall-3">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php echo THEMEPATH; ?>images/logo.png" alt="" />
						</a>
					</h1>
					<div class="span xmall-2 right idioma">
						<?php if (qtrans_getLanguage() == 'es'){ ?>
							<a href="<?php echo site_url('catalogo/?lang=es'); ?>" class="block">Español</a>
							<a href="<?php echo site_url('catalogo/?lang=en'); ?>" class="block greyed">Inglés</a>
						<?php } else { ?>
							<a href="<?php echo site_url('catalogo/?lang=en'); ?>" class="block">English</a>
							<a href="<?php echo site_url('catalogo/?lang=es'); ?>" class="block greyed">Spanish</a>
						<?php } ?>
					</div>
				</div>
			</header>

			<div class="main">
				<div class="width clearfix catalogo">
					<?php
					//Términos de TAX CATALOGO
					$argsCategorias = array(
						'taxonomy' => 'tax-catalogo',
					);
					$categorias = get_categories($argsCategorias);
					foreach ($categorias as $categoria) {
						$slug 		= $categoria->slug;
						$nombre 	= $categoria->name;
						$catID 		= $categoria->cat_ID;
						if ( $categoria->parent == 0 ){

							$childrenArgs = array(
								'parent'    => $categoria->term_id,
								'hide_empty' => false
							);
							$children = get_terms( 'tax-catalogo', $childrenArgs);

					?>
						<div class="columna full categoria center">
							<h2><?php echo $nombre; ?></h2>
							<?php
								$catImage = z_taxonomy_image_url($catID);
								if ( $catImage != '' ){
									echo "<img src='$catImage'/>";
								}
							?>
							<ul class="hide">
								<?php
									if($children) {
									 	// echo '<pre>';
										// 	print_r($children);
										// echo '</pre>';
										foreach ($children as $child) {
											$childSlug 		= $child->slug;
											$childNombre 	= $child->name;
											$childCatID 	= $child->term_id;
											$childCount 	= $child->count;

											if ( $childCount > 0 ){
												echo '<li class="clear"></li>';
												echo "<h4>$childNombre</h4>";
												echo "<hr>";
												$childCounter = 1;
												$childArgs = array(
													'tax-catalogo' 	=> $childSlug,
													'posts_per_page' 	=> -1
												);
												$childQuery = new WP_Query($childArgs);
												if ( $childQuery->have_posts() ) : while( $childQuery->have_posts() ) : $childQuery->the_post();
												$contenido = get_post_meta($post->ID, '_contenido_meta', true);
												$contenido_en = get_post_meta($post->ID, '_contenido_en_meta', true);
											?>
												<li class="columna xmall-12 small-6 large-4">
													<h3 class="full text-center"><?php the_title(); ?></h3>
													<?php if (qtrans_getLanguage() == 'es'){ ?>
														<p class="full text-center">Contenido neto: <?php echo $contenido; ?></p>
													<?php } else { ?>
														<p class="full text-center">Net Weight: <?php echo $contenido_en; ?></p>
													<?php } ?>
													<div class="clear"></div>
													<?php the_post_thumbnail( 'large', array('class' => 'columna xmall-6') ); ?>
													<div class="columna xmall-6"><?php the_content(); ?></div>
												</li>
											<?php
												if($childCounter %3 == 0) {
													echo '<div class="clear-large"></div>';
												}
												if($childCounter %2 == 0) {
													echo '<div class="clear-small no-large"></div>';
												}
											?>
											<?php $childCounter++; endwhile; endif; wp_reset_query();

											}
										}
									} else {
										$counter = 1;
										$args = array(
											'tax-catalogo' 	=> $slug,
											'posts_per_page' 	=> -1
										);
										$query = new WP_Query($args);
										if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
										$contenido = get_post_meta($post->ID, '_contenido_meta', true);
										$contenido_en = get_post_meta($post->ID, '_contenido_en_meta', true);
									?>
										<li class="columna xmall-12 small-6 large-4">
											<h3 class="full text-center"><?php the_title(); ?></h3>
											<?php if (qtrans_getLanguage() == 'es'){ ?>
												<p class="full text-center">Contenido neto: <?php echo $contenido; ?></p>
											<?php } else { ?>
												<p class="full text-center">Net Weight: <?php echo $contenido_en; ?></p>
											<?php } ?>
											<div class="clear"></div>
											<?php the_post_thumbnail( 'large', array('class' => 'columna xmall-6') ); ?>
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
									<?php $counter++; endwhile; endif; wp_reset_query();
								}
								?>
							</ul>
						</div>
						<div class="clear"></div>
					<?php } } ?>
				</div>

			</div><!-- main -->
			<?php wp_footer(); ?>
		</div><!-- container -->
	</body>
</html>