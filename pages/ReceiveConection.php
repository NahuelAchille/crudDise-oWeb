<?php
include ("../includes/conection.php"); // ajustá la ruta según tu estructura

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta corregida
    $sql = "SELECT nombre, password_hash FROM usuarios WHERE email = ? LIMIT 1";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password_hash'])) {
                echo "Bienvenido, " . htmlspecialchars($row['nombre']);
            } else {
                echo "Email o contraseña incorrectos.";
            }
        } else {
            echo "Usuario no encontrado.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la consulta.";
    }
}
?>
