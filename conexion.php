<?php
// Configuración de la conexión
$hostname = "localhost";
$username = "root";
$password = "";
$database = "android_mysql";

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
    // Manejar la excepción
    error_log($e->getMessage()); // Registrar el error en el archivo de registro
    die( $e->getMessage());
}
?>
