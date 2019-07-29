<?php
	include('../flashservices/services/cartoplastic/email/htmlMimeMail.php');
	include_once('../configuracion.php');
	$nombreCompleto = $HTTP_POST_VARS['nombreCompleto'];
	$email = $HTTP_POST_VARS['email'];
	$datosPedido = $HTTP_POST_VARS['datosPedido'];
    $mail = new htmlMimeMail();
    $contenido = $datosPedido . "<br><br>" . $nombreCompleto . "<br>" . $email;
   	$mail -> setHeadCharset('UTF-8');
   	$mail -> setHtmlCharset('UTF-8');
   	$mail -> setHtml($contenido);
    $mail -> setReturnPath($email);
    $mail -> setFrom($nombreCompleto . ' <' . $email . '>');
	$mail -> setSubject('Nuevo pedido desde la web');
    $mail -> setHeader('X-Mailer', 'HTML Mime mail class (http://www.phpguru.org)');
    $result = $mail -> send(array(CFG_EMAILDEFECTO), 'smtp');
?>