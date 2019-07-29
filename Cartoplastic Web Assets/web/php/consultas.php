<?php
	include('../flashservices/services/cartoplastic/email/htmlMimeMail.php');
	include_once('../configuracion.php');
	$nombreCompleto = $_POST['nombreCompleto'];
	$email = $_POST['email'];
	$areaInteres = $_POST['mensaje'];
    $mail = new htmlMimeMail();
    $contenido = $mensaje . "\n\n" . $nombreCompleto . "\n" . $email . "\n";
   	$mail -> setText(html_entity_decode($contenido));
    $mail -> setReturnPath($email);
    $mail -> setFrom($nombreCompleto . ' <' . $email . '>');
	$mail -> setSubject('Nueva consulta desde la web');
    $mail -> setHeader('X-Mailer', 'HTML Mime mail class (http://www.phpguru.org)');
    $result = $mail -> send(array(CFG_EMAILDEFECTO), 'smtp');
?>