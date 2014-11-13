<!doctype html>
<head>
	<meta charset="utf-8">
	<title><?php print_title(); ?></title>
	<link rel="shortcut icon" href="images/favicon.ico">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cleartype" content="on">
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,900,700italic,500,400italic,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--script-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.cycle2.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<!--[if lt IE 9]>
		<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
	<![endif]-->
	<div class="container">
		<header>
			<div class="clearfix full">
				<div class="block center columna large-10 clearfix">
					<h1 class="columna xmall-4 medium-3 large-2">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php echo THEMEPATH; ?>images/logo-pranacar-organics-typo.png" alt="">
						</a>
					</h1>
					<div class="columna xmall-8 medium-9 right" id="btn-movil">
						<a href="#"><i class="fa fa-bars fa-2x"></i></a>
					</div>
					<div class="clear-small"></div>
					<nav class="columna xmall-12 medium-12 large-10 menu clearfix">
						<a data-seccion="acerca-de" href="#">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
				 				Acerca de
							<?php } else { ?>
								About us
							<?php } ?>
						</a><a data-seccion="nuestra-historia" class="" href="#historia">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
				 				Nuestra historia
							<?php } else { ?>
								Our Story
							<?php } ?>
						</a><a data-seccion="que-ofrecemos" href="#">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
				 				¿Qué ofrecemos?
							<?php } else { ?>
								Our Services
							<?php } ?>
						</a><a data-seccion="capacidades" href="#">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
				 				Capacidades
							<?php } else { ?>
								Our Capabilities
							<?php } ?>
						</a><a data-seccion="contacto" href="#">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
				 				Contacto
							<?php } else { ?>
								Contact Us
							<?php } ?>
						</a>
					</nav>
				</div>
			</div>
		</header>

		<div class="margen-header">
			<div class="main full">