<?php
include '../../includes/conection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $dni = trim($_POST['dni']);
    $fecha_nac = trim($_POST['FechaNac']);
    $rol_id = trim($_POST['roles']);
    $domicilio = trim($_POST['Dir']);
    $codigo_postal = trim($_POST['codPost']);
    $observacion = trim($_POST['observaciones']);

    if (empty($nombre) || empty($email) || empty($password) || empty($dni) || empty($fecha_nac) || empty($rol_id) || empty($domicilio) || empty($codigo_postal)) {
        die("Todos los campos obligatorios deben completarse de forma correcta");
    }

    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nombre, email, password_hash, dni, fecha_nacimiento, rol_id, domicilio, codigo_postal, observacion, activo)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 1)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssissss", $nombre, $email, $password_hash, $dni, $fecha_nac, $rol_id, $domicilio, $codigo_postal, $observacion);

    if ($stmt->execute()) {
        echo "<script>alert('Usuario registrado correctamente'); window.location.href='userList.php';</script>";
    } else {
        echo "Error al registrar usuario: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();

} else {
    echo "Acceso no permitido directamente a este archivo.";
}
?>
