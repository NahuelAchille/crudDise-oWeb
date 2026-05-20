<?php
include '../../includes/conection.php';

$id = intval($_POST['id']);
$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);
$dni = trim($_POST['dni']);
$fecha_nac = !empty($_POST['FechaNac']) ? date('Y-m-d', strtotime($_POST['FechaNac'])) : null;
$rol_id = $_POST['roles'];
$domicilio = trim($_POST['Dir']);
$codigo_postal = trim($_POST['codPost']);
$observacion = trim($_POST['observaciones']);
$password = trim($_POST['password']);

if (!empty($password)) {
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "UPDATE usuarios 
            SET nombre=?, email=?, dni=?, fecha_nacimiento=?, rol_id=?, domicilio=?, codigo_postal=?, observacion=?, password_hash=? 
            WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssisssssi", $nombre, $email, $dni, $fecha_nac, $rol_id, $domicilio, $codigo_postal, $observacion, $password_hash, $id);
} else {
    $sql = "UPDATE usuarios 
            SET nombre=?, email=?, dni=?, fecha_nacimiento=?, rol_id=?, domicilio=?, codigo_postal=?, observacion=? 
            WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssisssi", $nombre, $email, $dni, $fecha_nac, $rol_id, $domicilio, $codigo_postal, $observacion, $id);
}

if ($stmt->execute()) {
    echo "<script>alert('Usuario actualizado correctamente'); window.location.href='userList.php';</script>";
} else {
    echo "Error al actualizar usuario: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>

