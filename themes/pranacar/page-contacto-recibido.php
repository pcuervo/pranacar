<?php

	$nombre = $email = $mensaje = '';

	$nombre 	= ( isset($_POST['nombre']) ) ? $_POST['nombre'] : '';
	$email 		= ( isset($_POST['email']) ) ? $_POST['email'] : '';
	$mensaje 	= ( isset($_POST['mensaje']) ) ? $_POST['mensaje'] : '';

	//$mail_to = 'franco@pranacar.com';
	$mail_to = 'raul@pcuervo.com';
	$subject = 'Contacto Pranacar';

	$body_message = 'Nombre: '.$nombre."\n";
	$body_message .= 'E-mail: '.$email."\n";
	$body_message .= 'Mensaje: '.$mensaje."\n";

	$headers = 'From: '.$email."\r\n";
	$headers .= 'Reply-To: '.$email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	get_header();
?>

	 <section class="somos cover"><!--somos-->
			<div class="width textos-claro">
				<h2 class="center block columna xmall-10">Gracias por contactárnos, te enviarémos una respuesta lo antes posible</h2>
	 		</div>
	 </section><!--somos-->

<?php get_footer(); ?>