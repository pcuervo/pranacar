<?php get_header(); ?>
	<section class="clearfix intro cover"><!--intro-->
		<div class="width">
	 		<img class="columna xmall-4 medium-4 large-2 block center margin-bottom" src="<?php echo THEMEPATH; ?>images/logo-pranacar-organics.png" alt="">

	 		<div class="clear"></div>

	 		<ul class="center block columna xmall-12 cycle-slideshow"
	 			data-cycle-fx="fade"
	 			data-cycle-timeout="3000"
	 			data-cycle-slides="> li"
	 		>
				<li class="center block columna xmall-12">Enfocados en el bienestar humano</li>
				<li class="center block columna xmall-12">Variedad y calidad</li>
				<li class="center block columna xmall-12">Eficiencia total en logística y distribución</li>
			</ul>
	 	</div>
	 	<div class="clear"></div>
 		<div class="center block span xmall-6 medium-10 large-4 sub-menu">
 			<div class="columna xmall-12 medium-4 large-4">
 				<a href="<?php echo site_url('catalogo'); ?>" class="block center columna xmall-10 medium-10 large-10" href="">Catálogo</a>
 			</div>
 			<div class="columna xmall-12 medium-4 large-4" data-seccion="contacto">
 				<a href="" class="block center columna xmall-10 medium-10 large-10" href="">Contacto</a>
 			</div>
 			<div class="columna xmall-12 medium-4 large-4">
 				<a href="<?php echo site_url('?lang=en'); ?>" class="block center columna xmall-10 medium-10 large-10" href="">English</a>
 			</div>
 		</div>

	 </section><!--intro-->

	 <section class="clearfix somos cover"><!--somos-->
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

	 <section class="clearfix acerca cover"><!--acerca-->
		<div class="width block textos-oscuro fondo-entero">
			<div id="acerca" class="center block text-center columna xmall-10 large-8  margin-bottom">
				<?php
				$hacemosArgs = array(
					'post_type' 	=> 'acerca-de',
					'category_name' => 'que-hacemos',
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

		 	<div class="columna large-8 center block">
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

	 <section class="clearfix historia cover"><!--historia-->
		<div class="width block textos-oscuro fondo-entero">

			<div id="historia" class=" center block columna xmall-8 margin-bottom sub-menu">
				<?php
				$historiaArgs = array(
					'post_type' 	=> 'historia',
					'posts_per_page'	=> 1
				);
				$historiaQuery = new WP_Query($historiaArgs);

				if( $historiaQuery->have_posts() ) : $historiaQuery->the_post();
				?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?>
				<?php
				endif;  wp_reset_query();?>

		 		<h2 class="text-center margin-bottom">¿Dudas?</h2>
		 		<a class="center block columna xmall-8 medium-5 large-3 margin-bottom" href="">Contáctanos</a>
	 		</div>
	 </section><!--historia-->

	 <section class="clearfix fabricantes cover"><!--fabricantes-->
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

	<section class="clearfix clientes cover"><!--clientes-->
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

	  <section class="clearfix capacidades cover"><!--capacidades-->
		<div class="width block center textos-oscuro">
			<div id="capacidades" class=" center block columna xmall-12 medium-10 margin-bottom">
				<h2>Nuestras capacidades</h2>

				<div class="block icono">
					<?php
					$capacidadesArgs = array(
						'post_type' 	=> 'nuestras-capacidades',
						'posts_per_page'	=> -1
					);
					$capacidadesQuery = new WP_Query($capacidadesArgs);

					if( $capacidadesQuery->have_posts() ) : $capacidadesQuery->the_post();?>
						<?php
							$my_postid = $post->ID;
							$content_post = get_post($my_postid);
							$content = $content_post->post_content;
							echo $content;
						?>
						<p><?php the_title(); ?></p>
					<?php endif;  wp_reset_query();?>
				</div>

				<div class="block icono">
					<span class="fa-stack fa-lg fa-3x">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-file fa-stack-1x fa-inverse"></i>
					</span>
					<p>Gestión de los trámites legales de importación y exportación.</p>
				</div>

				<div class="block  icono">
					<span class="fa-stack fa-lg fa-3x">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-truck fa-stack-1x fa-inverse"></i>
					</span>
					<p>Lograr una eficiencia total en logística y distribución.</p>
				</div>

				<div class="block  icono">
					<span class="fa-stack fa-lg fa-3x">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-users fa-stack-1x fa-inverse"></i>
					</span>
					<p>Atención personalizada a todos nuestros proveedores y clientes.</p>
				</div>

				<div class="block icono">
					<span class="fa-stack fa-lg fa-3x">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-bars fa-stack-1x fa-inverse"></i>
					</span>
					<p>Volúmenes por ítem que permiten a economías de escala asegurar competitividad en precios.</p>

				</div>
			</div>
		</div>
	 </section><!--capacidades-->

	  <section class="clearfix productos cover"><!--productos-->
		<div class="width block center">

			<div id="productos" class="center block columna xmall-11 textos-claro caja">
				<h2>Nuestros Productos</h2>
				<ul class="center block columna xmall-12 margin-bottom">
					<li class="columna xmall-12 medium-6 large-6">Productos agrícolas.</li>
					<li class="columna xmall-12 medium-6 large-6">Botanas y postres saludables.</li>

					<div class="clear"></div>
					<li class="columna xmall-12 medium-6 large-6">Productos de higiene y cuidado personal.</li>
					<li class="columna xmall-12 medium-6 large-6">Suplementos alimenticios y vitaminas.</li>
					<div class="clear"></div>
					<li class="columna xmall-12 medium-6 large-6">Alimentos básicos.</li>
					<li class="columna xmall-12 medium-6 large-6">Productos lácteos</li>
					<div class="clear"></div>
					<li class="columna xmall-12 medium-6 large-6">Productos sustitutos de lácteos.</li>
					<li class="columna xmall-12 medium-6 large-6">Productos agrícolas.</li>
					<div class="clear"></div>
					<li class="columna xmall-12 medium-6 large-6">Jugos naturales</li>
					<li class="columna xmall-12 medium-6 large-6">Refrescos naturales.</li>
					<li class="clear"></li>
					<li class="columna xmall-12 medium-6 large-6">Salsas.</li>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
	 </section><!--productos-->

	 <section class="clearfix contacto">
		<div class="width block center fondo-entero">
			<div id="contacto" class="columna xmall-12 medium-6 large-6 margin-bottom textos-oscuro">
				<h2>Contacto</h2>
				<p>Paseo de los tamarindos 90</p>
				<p>Torre 1 . Piso 17</p>
				<p>Col. Bosques de las lomas</p>
				<p>Teléfonos 55 . 9135 . 0087/88</p>
				<p>contacto@pranacar.com</p>
			</div>

			<div class="columna xmall-12 medium-6 large-6 margin-bottom textos-oscuro">
				<h2>Déjanos tus datos</h2>
				<form  action="" method="post">
				<fieldset class="margin-bottom">
				        <label class="columna xmall-12" for="nombre">Nombre:</label>
				        <input class="columna xmall-12" type="text" id="nombre" placeholder="Nombre completo" required/>

				        <label class="columna xmall-12" for="email">E-mail:</label>
				        <input class="columna xmall-12" type="email" id="email" placeholder="nombre@ejemplo.com" required/>

				        <label class="columna xmall-12" for="msg">Mensaje:</label>
				        <textarea class="columna xmall-12" id="msg" placeholder="Escribe aquí tu comentario." required></textarea>
				</fieldset>
			</div>
		</div>
	 </section><!--contacto-->
	 <section class="gmap full">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1568713983697!2d-99.24043789999993!3d19.4056269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201735ccbb933%3A0xe8000e5f6405a4fb!2sPaseo+de+Los+Tamarindos+90%2C+Bosques+de+Las+Lomas%2C+Cuajimalpa+de+Morelos%2C+05120+Ciudad+de+M%C3%A9xico%2C+D.F.%2C+M%C3%A9xico!5e0!3m2!1ses!2s!4v1407442164070" frameborder="0" style="border:0"></iframe>
	 </section>
	 <div class="scroll-top-wrapper width">
	    <span class="scroll-top-inner columna xmall-12 margin bottom">
	        <i class="right fa fa-2x fa-arrow-circle-up"></i>
	    </span>
	</div>
<?php get_footer(); ?>