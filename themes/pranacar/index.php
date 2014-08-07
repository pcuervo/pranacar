<?php get_header(); ?>
	<section class="clearfix intro"><!--intro-->
		<div class="width">
	 		<img class="columna xmall-4 large-2 block center margin.bottom" src="<?php echo THEMEPATH; ?>images/logo-pranacar-organics.png" alt="">

	 		<div class="clear"></div>

	 		<ul class="center block columna xmall-12 cycle-slideshow"
	 			data-cycle-fx="fade"
	 			data-cycle-timeout="3000"
	 			data-cycle-slides="> li"
	 			data-cycle-auto-height="container"
	 		>

			        <li class="center block columna xmall-12">Enfocados en el bienestar humano</li>		    
			    
			        <li class="center block columna xmall-12">Variedad y calidad</li>
			    
			        <li class="center block columna xmall-12">Eficiencia total en logística y distribución</li>
			    
			</ul>
	 	</div>

	 	<div class="clear"></div>	
	 	
 		<div class="center block span xmall-6 medium-10 large-4 sub-menu">

 			<div class="columna xmall-12 medium-4 large-4">
 				<a class="columna xmall-12 medium-10 large-10" href="">Catálogo</a>
 			</div>

 			<div class="columna xmall-12 medium-4 large-4">
 				<a class="columna xmall-12 medium-10 large-10" href="">Contacto</a>
 			</div>

 			<div class="columna xmall-12 medium-4 large-4">
 				<a class="columna xmall-12 medium-10 large-10" href="">English</a>
 			</div>
 		</div>

	 </section><!--intro-->

	 <section class="clearfix somos"><!--somos-->
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

	 <section class="clearfix acerca"><!--acerca-->
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

	 <section class="clearfix historia"><!--historia-->
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
		 		<a class="center block columna xmall-3 margin-bottom" href="">Contáctanos</a>
	 		</div>
	 </section><!--historia-->

	 <section class="clearfix ofrecemos"><!--ofrecemos-->
		<div id="fabricantes" class="width block center textos-claro fondo-entero">
			<div class=" center block columna xmall-10 margin-bottom">
				<h2>A los fabricantes?</h2>
		 		<p>Por medio de una relación cercana con los fabricantes (seleccionados con una metodología enfocada en cumplimiento de estándares de calidad, certificado de los productos y tiempos de entrega), logramos entender sus volúmenes y capacidades para así colocar sus productos en los puntos de venta con más demanda para estos. Dando así, la oportunidad de comercialización, desarrollo y crecimiento al fabricante.</p>
		 	</div>

		 	<div class="center block columna xmall-10 ">
		 		<h2>A los clientes</h2>
		 		<p>Basado en los productos saludables, naturales y orgánicos que obtenemos de los fabricantes logramos darle variedad, calidad y entrega oportuna a nuestros clientes, distribuidores, cadenas comerciales y brokers. Como consecuencia, promovemos el bienestar de los clientes finales que consumen nuestros productos.</p>
		 	</div>
	 	</div>
	 </section><!--ofrecemos-->

	  <section class="clearfix capacidades"><!--capacidades-->
		<div class="width block center textos-oscuro fondo-entero">

			<div id="capacidades" class=" center block columna xmall-10 margin-bottom">
				<h2>Nuestras capacidades</h2>

				<div class="left columna xmall 2 icono">
					<i class="fa fa-barcode fa-3x"></i>
				</div>
				<p>Atender más de 1000 puntos de venta en México, EEUU y Canadá.</p>


				<div class="left columna xmall 2 icono">
					<i class="fa fa-file-o fa-3x"></i>
				</div>
				<p>Gestionar todos los trámites legales de importación y exportación.</p>


				<div class="left columna xmall 2 icono">
					<i class="fa fa-truck fa-3x"></i>
				</div>
				<p>Lograr una eficiencia total en logística y distribución.</p>

				<div class="left columna xmall 2 icono">
					<i class="fa fa-users fa-3x"></i>
				</div>
				<p>Atención personalizada a todos nuestros proveedores y clientes.</p>

				<div class="left columna xmall 2 icono">
					<i class="fa fa-tasks fa-3x"></i>
				</div>
				<p>Volúmenes por ítem que permiten a economías de escala asegurar competitividad en precios.</p>
			</div>
		</div>
	 </section><!--capacidades-->

	  <section class="clearfix productos"><!--productos-->
		<div class="width block center fondo-entero">

			<div id="productos" class="center block columna xmall-10 margin-bottom textos-oscuro">
				<h2>Nuestros Productos</h2>
				<ul class="center block columna xmall-12 margin-bottom">
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Productos agrícolas</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Suplementos alimenticios y vitaminas</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Productos de higiene y cuidado personal</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Botanas y postres saludables</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Alimentos básicos</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Productos lácteos</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Productos sustitutos de lácteos</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Productos agrícolas</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Jugos naturales</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Refrescos naturales</li>
					<li class="columna xmall-6"><i class="fa fa-caret-right"></i> Salsas</li>

				</ul>
			</div>
		</div>
	 </section><!--productos-->

	 <section class="clearfix contacto"><!--productos-->
		<div class="width block center fondo-entero">

			<div id="contacto" class="columna xmall-6 margin-bottom textos-oscuro">
				<h2>Contacto</h2>
				<p>Paseo de los tamarindos 90 .  Torre 1 . Piso 17</p>
				<p>Col. Bosques de las lomas</p>
				<p>Teléfonos 55 . 9135 . 0087/88</p>
				<p>contacto@pranacar.com</p>

			</div>

			<div class="columna xmall-6 margin-bottom textos-oscuro">
				<h2>Déjanos tus datos</h2>
				<form  action="" method="post">
				<fieldset class="margin-bottom">
				        <label class="columna xmall-12" for="nombre">Nombre:</label>
				        <input class="columna xmall-10" type="text" id="nombre" placeholder="Nombre completo" required/>

				        <label class="columna xmall-12" for="email">E-mail:</label>
				        <input class="columna xmall-10" type="email" id="email" placeholder="nombre@ejemplo.com" required/>

				        <label class="columna xmall-12" for="msg">Mensaje:</label>
				        <textarea class="columna xmall-10" id="msg" placeholder="Escribe aquí tu comentario." required></textarea>    
				</fieldset>  
			</div>
		</div>
	 </section><!--productos-->
<?php get_footer(); ?>