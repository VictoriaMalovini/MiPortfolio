<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


$formcontent="
    Nombre: $nombre \n
    E-mail: $correo \n
    Mensaje: $mensaje
";

$recipient = "victoriamalovini47@gmail.com";

$subject = "MENSAJE VIA PORTFOLIO DE $nombre";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>