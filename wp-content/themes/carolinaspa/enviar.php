<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$header = 'From: ' . $email . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header .= 'Mime-Version: 1.0 \r\n';
$header .= 'Content-Type: text/plain';
$mensajeCorreo = "This message was sent by: " . $nombre . "\r\n";
$mensajeCorreo .= "Email: " . $email . "\r\n";
$mensajeCorreo .= "Mensaje:: " . $mensaje . "\r\n";
$para = "nombre@correo.com";
$asunto = "Contacto de sitio web";
$respuesta = mail($para, $asunto, utf8_encode($mensajeCorreo), $header );

echo json_encode(array(
    'mensaje' => sprintf('El mensaje se ha enviado!'),
    'datos' => array(
        'nombre' => $nombre,
        'email' => $email,
        'mensaje' => $mensaje
    ),
    'respuesta' => $respuesta
));