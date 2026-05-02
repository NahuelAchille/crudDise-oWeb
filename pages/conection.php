<?php
$host = "localhost";
$database = "admin_system";
$user = "root";
$password = "";


// crear la conexion
$conexion = mysql_connect($host, $usuario, $password,$database);

//Verificar si la conexion fallo
ir (!$conexion){
    die("Error de conexion: ".mysqli_connect_error());
}

//Opcional:Configurar el conjunto de caracteres a UTF-8 para evitar problemas con acentos y Ñ mysqli_set_charset($conexion, "utf8");
?>