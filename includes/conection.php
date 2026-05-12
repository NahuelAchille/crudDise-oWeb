<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "CRUD";

$conexion = mysqli_connect($host, $user, $password);

if (!$conexion){
    die("Error de conexion: ".mysqli_connect_error());
}

mysqli_query($conexion, "CREATE DATABASE IF NOT EXISTS $database CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");

mysqli_select_db($conexion, $database);

mysqli_set_charset($conexion, "utf8");
?>