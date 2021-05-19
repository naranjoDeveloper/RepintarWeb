<?php

//Llamando a los campos del formulario del index

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

//Datos para el correo

$destinatario="naranjoalejandro96@gmail.com";
$tema="Contacto desde nuestra web";

$carta="De: $nombre \n";
$carta.= "Email: $email \n";
$carta.="Asunto: $asunto \n";
$carta.="Mensaje: $mensaje";

//Enviando mensaje

mail($destinatario, $tema, $carta);
header('location:mensaje.html')

?>