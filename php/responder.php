<?php

require '../PHPMailer_v5.1/class.phpmailer.php';

$html = "respuesta: ".$_POST["respuesta"];

$emailalcualsevaaenviar = 'william.calderon6148@unaula.edu.co'; // correo al cual se va enviar
$from = $_POST['correo_funcionario']; // quien envia el correo
$customer_name = $_POST['Nombre_funcionario']; // nombre de quien envia el correo
$asunto = $_POST["Asusto"];

$mail = new PHPMailer(true);
$mail->From = $emailalcualsevaaenviar;
$mail->FromName = 'Nombre empresa';
$mail->CharSet = "UTF-8";
$mail->Subject = $asunto; 
$mail->AddAddress($from, $customer_name);
$mail->Body = $html;
$mail->AltBody = $html;
$mail->IsHTML(true);
if( $mail -> Send() )
echo "ok";
else
echo "error";

?>
