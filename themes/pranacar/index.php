<?php get_header(); ?>
	<section class="intro cover"><!--intro-->
		<div class="clearfix width">
	 		<img class="columna xmall-4 medium-4 large-2 block center margin-bottom" src="<?php echo THEMEPATH; ?>images/logo-pranacar-organics.png" alt="">

	 		<div class="clear"></div>

	 		<ul class="center block columna xmall-12 cycle-slideshow"
	 			data-cycle-fx="fade"
	 			data-cycle-timeout="3000"
	 			data-cycle-slides="> li"
	 		>
	 			<?php if (qtrans_getLanguage() == 'es'){ ?>
					<li class="center block columna xmall-12">Enfocados en el bienestar humano</li>
					<li class="center block columna xmall-12">Variedad y calidad</li>
					<li class="center block columna xmall-12">Eficiencia total en logística y distribución</li>
				<?php } else { ?>
					<li class="center block columna xmall-12">Focused on Well-being of People</li>
					<li class="center block columna xmall-12">Variety and Quality</li>
					<li class="center block columna xmall-12">Reliable and Efficient Option</li>
				<?php } ?>
			</ul>
	 	</div>
	 	<div class="clear"></div>
 		<div class="clearfix center block span xmall-6 medium-10 large-4 sub-menu">
 			<div class="columna xmall-12 medium-4 large-4">
 				<?php if (qtrans_getLanguage() == 'es'){ ?>
 					<a href="<?php echo site_url('catalogo'); ?>" class="block center columna xmall-10 medium-10 large-12" href="">Catálogo</a>
 				<?php } else { ?>
					<a href="<?php echo site_url('catalogo/?lang=en'); ?>" class="block center columna xmall-10 medium-10 large-12" href="">Catalog</a>
				<?php } ?>
 			</div>
 			<div class="columna xmall-12 medium-4 large-4">
 				<a data-seccion="contacto" class="block center columna xmall-10 medium-10 large-12 contacto" href="">
				<?php if (qtrans_getLanguage() == 'es'){ ?>
 					Contacto
				<?php } else { ?>
					Contact
				<?php } ?>
 				</a>
 			</div>
 			<div class="columna xmall-12 medium-4 large-4">
 				<?php if (qtrans_getLanguage() == 'es'){ ?>
					<a href="<?php echo site_url('?lang=en'); ?>" class="block center columna xmall-10 medium-10 large-12" href="">English</a>
				<?php } else { ?>
					<a href="<?php echo site_url('?lang=es'); ?>" class="block center columna xmall-10 medium-10 large-12" href="">Español</a>
				<?php } ?>
 			</div>
 		</div>

	 </section><!--intro-->

	 <section class="somos cover"><!--somos-->
			<div class="width textos-claro">
				<?php
				$coverArgs = array(
					'post_type' 	=> 'acerca-de',
					'category_name' => 'cover',
					'posts_per_page'	=> 1
				);
				$coverQuery = new WP_Query($coverArgs);

				if( $coverQuery->have_posts() ) : $coverQuery->the_post();
				?>
					<h2 class="center block columna xmall-10"><?php the_content();?></h2>
				<?php
				endif;  wp_reset_query();?>
	 		</div>

	 </section><!--somos-->

	 <section id="acerca-de" class="acerca cover"><!--acerca-->
		<div class="width block textos-oscuro fondo-entero">
			<div id="acerca" class="center block text-center columna xmall-10 large-8  margin-bottom">
				<?php
				$hacemosArgs = array(
					'post_type' 	=> 'acerca-de',
					'category_name' => 'QUÉ-HACEMOS',
					'posts_per_page'	=> 1
				);
				$hacemosQuery = new WP_Query($hacemosArgs);

				if( $hacemosQuery->have_posts() ) : $hacemosQuery->the_post();
				?>
					<h2><?php the_title() ?></h2>
			 		<p><?php the_content() ?></p>
				<?php
				endif;  wp_reset_query();?>
		 	</div>

		 	<div class="columna large-10 center block clearfix">
		 		<?php
				$misionVisionArgs = array(
					'post_type' 	=> 'acerca-de',
					'category_name' => 'mision-vision',
					'posts_per_page'	=> 2
				);
				$misionVisionQuery = new WP_Query($misionVisionArgs);

				if( $misionVisionQuery->have_posts() ) : while( $misionVisionQuery->have_posts() ) : $misionVisionQuery->the_post();
				?>
					<div class="columna xmall-6 text-center">
						<h2><?php the_title() ?></h2>
				 		<p><?php the_content() ?></p>
			 		</div>
				<?php
				endwhile; endif;  wp_reset_query();?>
		 	</div>

	 	</div>
	 </section><!--acerca-->

	 <section id="nuestra-historia" class="historia cover"><!--historia-->
		<div class="width block textos-oscuro fondo-entero">

			<div id="historia" class="center block columna xmall-12 large-8 margin-bottom sub-menu">
				<?php
				$historiaArgs = array(
					'post_type' 	=> 'historia',
					'posts_per_page'	=> 1
				);
				$historiaQuery = new WP_Query($historiaArgs);

				if( $historiaQuery->have_posts() ) : $historiaQuery->the_post();
				?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				<?php
				endif;  wp_reset_query();?>

		 		<h2 class="text-center margin-bottom">
		 		<?php if (qtrans_getLanguage() == 'es'){ ?>
		 			¿Dudas?
				<?php } else { ?>
					Questions?
				<?php } ?>
		 		</h2>
		 		<a class="center block columna xmall-8 medium-5 large-3 margin-bottom" href="">
		 		<?php if (qtrans_getLanguage() == 'es'){ ?>
		 			Contáctanos
				<?php } else { ?>
					Contact us
				<?php } ?>
				</a>
	 		</div>
	 	</p></div>
	 </section><!--historia-->

	 <section id="que-ofrecemos" class="clearfix fabricantes cover"><!--fabricantes-->
		<div id="fabricantes" class="width block center textos-claro fondo-entero">
			<div class=" center block columna xmall-10 medium-10 large-8 margin-bottom">
				<?php
				$fabricantesArgs = array(
					'post_type' 	=> 'que-ofrecemos',
					'category_name' => 'fabricantes',
					'posts_per_page'	=> 1
				);
				$fabricantesQuery = new WP_Query($fabricantesArgs);

				if( $fabricantesQuery->have_posts() ) : $fabricantesQuery->the_post();
				?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?>
				<?php
				endif;  wp_reset_query();?>
		 	</div>
		 </div>
	</section><!--Fabricantes-->

	<section class="clientes cover"><!--clientes-->
		<div id="fabricantes" class="width block center textos-oscuro">
		 	<div class="center block columna xmall-10 medium-10 large-8 ">
		 		<?php
				$clientesArgs = array(
					'post_type' 	=> 'que-ofrecemos',
					'category_name' => 'clientes',
					'posts_per_page'	=> 1
				);
				$clientesQuery = new WP_Query($clientesArgs);

				if( $clientesQuery->have_posts() ) : $clientesQuery->the_post();
				?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?>
				<?php
				endif;  wp_reset_query();?>
		 	</div>
	 	</div>
	 </section><!--clientes-->

	  <section id="capacidades" class="cover"><!--capacidades-->
		<div class="width clearfix textos-oscuro">
			<div id="capacidades" class="capacidades center block columna xmall-12 margin-bottom">
				<?php if (qtrans_getLanguage() == 'es'){ ?>
		 			<h2>Nuestras capacidades</h2>
				<?php } else { ?>
					<h2>Our Capabilities</h2>
				<?php } ?>
				<?php
				$capacidadesArgs = array(
					'post_type' 		=> 'nuestras-capacidades',
					'posts_per_page'	=> -1
				);
				$capacidadesQuery = new WP_Query($capacidadesArgs);

				if( $capacidadesQuery->have_posts() ) : while( $capacidadesQuery->have_posts() ) : $capacidadesQuery->the_post();?>
					<div class="icono">
						<?php
							$my_postid = $post->ID;
							$content_post = get_post($my_postid);
							$content = $content_post->post_content;
							echo $content;
						?>
						<p><?php the_title(); ?></p>
					</div>
				<?php endwhile; endif; wp_reset_query();?>
			</div>
		</div>
	 </section><!--capacidades-->

	  <section id class="productos cover"><!--productos-->
		<div class="clearfix width block center">

			<div id="productos" class="center block columna xmall-11 textos-claro caja">
				<?php if (qtrans_getLanguage() == 'es'){ ?>
		 			<h2>Nuestros Productos</h2>
				<?php } else { ?>
					<h2>Our products</h2>
				<?php } ?>
				<ul class="clearfix margin-bottom">
				<?php
				$counterProductos = 1;
				$productosArgs = array(
					'post_type' 		=> 'nuestros-productos',
					'posts_per_page'	=> -1
				);
				$productosQuery = new WP_Query($productosArgs);
				if( $productosQuery->have_posts() ) : while( $productosQuery->have_posts() ) : $productosQuery->the_post();?>
					<li class="columna xmall-12 medium-6 large-6"><?php the_title(); ?></li>
					<?php if ($counterProductos%2 == 0){ ?>
						<div class="clear"></div>
					<?php } ?>
				<?php $counterProductos++; endwhile; endif; wp_reset_query();?>
				</ul>
			</div>
		</div>
	 </section><!--productos-->

	 <section id="contacto" class="contacto"><!--conacto-->
		<div class="width clearfix">
			<div id="contacto" class="columna xmall-12 medium-6 large-6 margin-bottom textos-oscuro">
				<?php if (qtrans_getLanguage() == 'es'){ ?>
		 			<h2>Contacto</h2>
				<?php } else { ?>
					<h2>Contact</h2>
				<?php } ?>
				<p>Paseo de los tamarindos 90</p>
				<p>Torre 1 . Piso 17</p>
				<p>Col. Bosques de las lomas</p>
				<p>Teléfonos 55 . 9135 . 0087/88</p>
				<p>contacto@pranacar.com</p>
			</div>

			<div class="columna xmall-12 medium-6 large-6 margin-bottom textos-oscuro">
				<?php if (qtrans_getLanguage() == 'es'){ ?>
		 			<h2>Déjanos tus datos</h2>
				<?php } else { ?>
					<h2>Contact us</h2>
				<?php } ?>
				<form class="forma-contacto margin-bottom" action="<?php echo site_url('contacto-recibido'); ?>" method="post">
					<?php if (qtrans_getLanguage() == 'es'){ ?>
		 				<label class="block full" for="nombre">Nombre:</label>
					<?php } else { ?>
						<label class="block full" for="nombre">Name:</label>
					<?php } ?>
			        <input class="block full required" type="text" name="nombre"/>
			        <label class="block full" for="email">E-mail:</label>
			        <input class="block full required email" type="email" name="email"/>
					<?php if (qtrans_getLanguage() == 'es'){ ?>
		 				<label class="block full" for="mensaje">Mensaje:</label>
					<?php } else { ?>
						<label class="block full" for="mensaje">Message:</label>
					<?php } ?>
			        <textarea name="mensaje" class="block full required"></textarea>
					<?php if (qtrans_getLanguage() == 'es'){ ?>
			        	<input class="block full" type="submit" value="Enviar">
			        <?php } else { ?>
						<input class="block full" type="submit" value="Send">
					<?php } ?>
				</form>
			</div>
		</div>
	 </section><!--contacto-->
	 <!-- 19.405607, -99.240459 -->
	 <section class="gmap full" id="mapa">

	 </section>
	<!--  <div class="scroll-top-wrapper width">
	    <span class="scroll-top-inner columna xmall-12 margin bottom">
	        <i class="right fa fa-2x fa-arrow-circle-up"></i>
	    </span>
	</div> -->
<?php get_footer(); ?>