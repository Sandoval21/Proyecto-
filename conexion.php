<?php
// Mostrar errores detallados (solo para desarrollo, no para producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Parámetros de la conexión
$host = "localhost";
$port = "5432";
$dbname = "proyecto";
$user = "postgres";
$password = "sandovalsegura1";

// Crear conexión
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Verificar conexión
if (!$conn) {
    echo "Conexión fallida: " . pg_last_error();
} else {
    echo "Conexión exitosa";
    // Cerrar la conexión
    pg_close($conn);
}
?>