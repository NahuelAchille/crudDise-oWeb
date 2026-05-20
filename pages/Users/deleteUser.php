<?php
include '../../includes/conection.php';

if (!isset($_GET['id'])) {
    die("ID de usuario no especificado.");
}

$id = intval($_GET['id']);

$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<script>alert('Usuario eliminado correctamente'); window.location.href='userList.php';</script>";
} else {
    echo "Error al eliminar usuario: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
