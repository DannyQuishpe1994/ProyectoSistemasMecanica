<?php

// Llamando a los campos
//$nombre = $_POST['nombre'];
//$correo = $_POST['correo'];
//$telefono = $_POST['telefono'];
//$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "danny.quishpe.dq@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "mwnsaje de prueba ";

// Enviando Mensaje
$mail = mail($destinatario, $asunto, $carta);

if ($mail) {
    echo 'mensaje enviado';
} else {
        echo 'no valio';
        
}
?>