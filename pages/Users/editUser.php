<?php
include'../../includes/conection.php';

if (!isset($_GET['id'])) {
    die("ID de usuario no especificado.");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM usuarios WHERE id = ?";
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
    <style>
        @media (min-width: 768px) {
            .main-content-desktop {
                margin-left: 20rem !important;
                display: block !important;
            }
        }
    </style>
    <main class="main-content-desktop">
        <div class="p-2 shadow" style="color: #055160;">
            <article class="d-flex gap-2 align-items-center">
                <i class="bi bi-people-fill nav-icon"></i>
                <span>Añadir Usuario</span>
            </article>
        </div>
        <form class="d-flex flex-column m-4" method="POST" action="updateUser.php">
                 <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <label for="nombre" class="form-label" >Nombre
                <input type="text" class="form-control shadow-none" name="nombre" id="nombre" value="<?php echo htmlspecialchars($user['nombre']); ?>" required>
                </input>
            </label>
            <label for="email" class="form-label" >Email
                <input type="text" class="form-control shadow-none" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                </input>
            </label>
            <label for="password" class="form-label">Nueva Contraseña
                <input type="password" class="form-control shadow-none" name="password" id="password" placeholder="Dejar vacío para mantener la actual">
            </label>
            <label for="dni" class="form-label" >DNI
                <input type="number" pattern="[0-9]{7,8}" class="form-control shadow-none" name="dni" id="dni" value="<?php echo htmlspecialchars($user['dni']); ?>" required>
                </input>
            </label>
            <label for="fechaNac" class="form-label" >Fecha Nacimiento
                <input type="date" class="form-control shadow-none" name="FechaNac" id="FechaNac" value="<?php echo htmlspecialchars($user['fecha_nacimiento']); ?>" required>
                </input>
            </label>
            <?php include '../../includes/selectRol.php'?>
            <label for="Dir" class="form-label" >Domicilio
                <input type="text" class="form-control shadow-none" name="Dir" id="Dir" value="<?php echo htmlspecialchars($user['domicilio']); ?>" required>
                </input>
            </label>
            <label for="codPost" class="form-label" >Codigo Postal
                <input type="text" class="form-control shadow-none" name="codPost" id="codPost" value="<?php echo htmlspecialchars($user['codigo_postal']); ?>" required>
                </input>
            </label>
            <label for="observaciones" class="form-label" >Observaciones
                <input type="" class="form-control shadow-none" name="observaciones" id="observaciones" value="<?php echo htmlspecialchars($user['observacion']); ?>">
                </input>
            </label>
            <button type="submit" class="btn btn w-100" style="background-color: #087990; color:white">Ingresar</button>
        </form>