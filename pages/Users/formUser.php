<?php
include'../../includes/conection.php';
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
        <form class="d-flex flex-column m-4" method="POST" action="addUser.php">
            <label for="nombre" class="form-label" >Nombre
                <input type="text" class="form-control shadow-none" id="nombre" placeholder="Juancito" required>
                </input>
            </label>
            <label for="email" class="form-label" >Email
                <input type="text" class="form-control shadow-none" id="email" placeholder="Ejemplo@gmail.com" required>
                </input>
            </label>
            <label for="password" class="form-label" >Contraseña
                <input type="password" class="form-control shadow-none" id="password" placeholder="Juancito" required>
                </input>
            </label>
            <label for="dni" class="form-label" >DNI
                <input type="number" pattern="[0-9]{7,8}" class="form-control shadow-none" id="dni" required>
                </input>
            </label>
            <label for="fechaNac" class="form-label" >Fecha Nacimiento
                <input type="date" class="form-control shadow-none" id="FechaNac" required>
                </input>
            </label>
            <label for="roles" class="form-label" >Rol
                <select name="roles" class="form-select shadow-none" id="roles" required>
                    <option value="" selected disabled>Elija un rol...</option>
                        <?php
                        $query_roles = "SELECT id,nombre FROM roles ORDER BY nombre ASC";
                        $result_roles = mysqli_query($conexion, $query_roles);

                        if ($result_roles && mysqli_num_rows($result_roles) > 0) {
                            while ($row = mysqli_fetch_assoc($result_roles)) {
                                echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['nombre']) . '</option>';
                            }
                        } else {
                            echo '<option disabled>No se encontraron roles</option>';
                        }
                        ?>
                </select>
            </label>
            <label for="Dir" class="form-label" >Domicilio
                <input type="text" class="form-control shadow-none" id="Dir" placeholder="Paris 1445,CABA,Argentina" required>
                </input>
            </label>
            <label for="codPost" class="form-label" >Codigo Postal
                <input type="text" class="form-control shadow-none" id="codPost" placeholder="1714" required>
                </input>
            </label>
            <label for="observaciones" class="form-label" >Observaciones
                <input type="" class="form-control shadow-none" id="observaciones" placeholder="El puesto es para...">
                </input>
            </label>
            <button type="submit" class="btn btn w-100" style="background-color: #087990; color:white">Ingresar</button>
        </form>