<?php
// Establecer la zona horaria a México Central
date_default_timezone_set('America/Mexico_City');
// Configuración de la conexión
$hostname = "localhost";
$username = "root";
$password = "";
$database = "android_mysq";

// Configurar para que no muestre advertencias
error_reporting(E_ALL & ~E_WARNING);

// Intenta realizar la conexión
try {
    // Crear una nueva instancia de mysqli
    $mysqli = new mysqli($hostname, $username, $password, $database);

    // Verificar si hubo un error durante la conexión
    if ($mysqli->connect_errno) {
        // Ocurrió un error al conectar
        throw new Exception("Error al conectar a la base de datos: " . $mysqli->connect_error);
    } else {
        // La conexión fue exitosa
        // Puedes realizar operaciones con la base de datos aquí
        echo "Conexion";
    }
} catch (Exception $e) {
    // Obtener la fecha y hora actual
    $fecha_actual = date("Y-m-d H:i:s");

    // Manejar la excepción
    $error_message = "[$fecha_actual] Exception: " . $e->getMessage();
    $error_message = str_replace("\n", " ", $error_message); // Reemplazar saltos de línea con espacios
    file_put_contents("log.txt", $error_message . PHP_EOL. PHP_EOL, FILE_APPEND); // Guardar el error en el archivo de registro
    die($error_message);
}

// estos cambios son en feature
?>
