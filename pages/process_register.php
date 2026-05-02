<?php
require_once 'conection.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass_plane = $_POST['password'];

    sql_check = "SELECT id FROM users WHERE email = ?"
    mysqli_stmt_bind_param($stmt, "s" ;$email);

    mysqli_stmt_execute($stmt_check);

    $result = mysqli_stmt_get_result($stmt_check);
}