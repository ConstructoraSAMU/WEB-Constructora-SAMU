<?php
$destinatario = "contactoempresasamu@gmail.com"; // Reemplaza con la dirección de correo electrónico del destinatario.
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$header = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();
$mensajeCorreo = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

mail($destinatario, "Mensaje enviado desde el formulario de contacto", $mensajeCorreo, $header);

header("Location:gracias.html");
?>
