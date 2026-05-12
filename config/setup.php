<?php
include_once __DIR__ . '/../includes/conection.php';

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = file_get_contents(__DIR__ . '/../database.sql');

if ($conexion->multi_query($sql)) {
    echo "Base de datos inicializada correctamente.";
} else {
    echo "Error al inicializar la base de datos: " . $conexion->error;
}
?>
