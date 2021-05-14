<?php
$nombre = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "message: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'johncruzsanchez19@gmail.com';
$asunto = 'message de mi sitio web';



if(mail('pp@pp.com', $asunto, $mensaje)){
    echo "mail enviado";
}else{
    echo "uyuyuyuyuy";
}
header("Location:index.html");
?>