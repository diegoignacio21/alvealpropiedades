<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar el correo
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Dirección donde quieres recibir el mensaje
    $destinatario = "tuemail@ejemplo.com"; // <-- CAMBIAR AQUÍ
    $asunto = "Consulta desde la web";
    $mensaje = "El usuario con el correo: $email desea más información.";
    $cabeceras = "From: noreply@tudominio.com\r\n";
    $cabeceras .= "Reply-To: $email\r\n";
    $cabeceras .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "<h2>✅ Gracias. Hemos recibido tu correo.</h2>";
    } else {
        echo "<h2>❌ Hubo un problema al enviar el correo. Intenta más tarde.</h2>";
    }
} else {
    echo "Acceso no permitido.";
}
?>





