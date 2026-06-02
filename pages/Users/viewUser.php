<?php
include'../../includes/conection.php';

if (!isset($_GET['id'])) {
    die("ID de usuario no especificado.");
}

$id = intval($_GET['id']);
$sql = "SELECT u.*, r.nombre AS rol FROM usuarios u INNER JOIN roles r ON u.rol_id = r.id WHERE u.id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Usuario no encontrado.");
}

$user = $result->fetch_assoc();
?>

<div class="d-block d-md-none">
    <?php include '../../includes/header.php'; ?>
</div>

<div class="d-none d-md-block">
    <?php include '../../includes/sideBar.php'; ?>
</div>
<main id="mainContent" class="main-content-desktop">
  <div id="mainContent" class="container mt-4">
        <div class="col-md-10 offset-md-2 mt-4">
            <h3>Detalle del Usuario</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombre:</strong> <?php echo htmlspecialchars($user['nombre']); ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>
                <li class="list-group-item"><strong>DNI:</strong> <?php echo htmlspecialchars($user['dni']); ?></li>
                <li class="list-group-item"><strong>Rol:</strong> <?php echo htmlspecialchars($user['rol']); ?></li>
                <li class="list-group-item"><strong>Domicilio:</strong> <?php echo htmlspecialchars($user['domicilio']); ?></li>
                <li class="list-group-item"><strong>Código Postal:</strong> <?php echo htmlspecialchars($user['codigo_postal']); ?></li>
                <li class="list-group-item"><strong>Observación:</strong> <?php echo htmlspecialchars($user['observacion']); ?></li>
                <li class="list-group-item"><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($user['fecha_nacimiento']); ?></li>
                <li class="list-group-item"><strong>Estado:</strong> <?php echo ($user['activo'] ? 'Activo' : 'Inactivo'); ?></li>
                <li class="list-group-item"><strong>Fecha de Registro:</strong> <?php echo date("d/m/Y H:i", strtotime($user['fecha_registro'])); ?></li>
            </ul>
            <a href="userList.php" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</main>
