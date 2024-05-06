<?php
// Configuración de la conexión
$hostname = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "android_mysql";

// Crear una nueva instancia de mysqli
$mysqli = new mysqli($hostname, $username, $password, $database);

// Verificar la conexión
if ($mysqli->connect_errno) {
    // Ocurrió un error al conectar
    error_log("Error al conectar a la base de datos: " . $mysqli->connect_error);
    die("Error de conexión. Por favor, inténtalo de nuevo más tarde.");
} else {
    // La conexión fue exitosa
    // Puedes realizar operaciones con la base de datos aquí
}
?>
