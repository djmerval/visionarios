<?php 
$name = $_POST['name'];
$mail = $_POST['mail'];
$cel = $_POST['cel'];
$message = $_POST['subject'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Su correo es: " . $mail . "\r\n";
$message .= "Teléfono de contacto: " . $cel . "\r\n";
$message .= "Mensaje: " . $_POST['subject'] . "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'diego-stainl@hotmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);
header("Location:index.html");

?>