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
        <form class="d-flex flex-column m-4">
            <label for="nombre" class="form-label" >Nombre
                <input type="text" class="form-control shadow-none" id="nombre" placeholder="Juancito" required>
                </input>
            </label>
            <label for="nombre" class="form-label" >Email
                <input type="text" class="form-control shadow-none" id="email" placeholder="Ejemplo@gmail.com" required>
                </input>
            </label>
            <label for="nombre" class="form-label" >Contraseña
                <input type="password" class="form-control shadow-none" id="password" placeholder="Juancito" required>
                </input>
            </label>
            <label for="roles" class="form-label" >DNI
                <select name="roles" class="form-control shadow-none" required>
                </select>
            </label>
            <label for="nombre" class="form-label" >Fecha Nacimiento
                <input type="date" class="form-control shadow-none" id="nombre" placeholder="Juancito" required>
                </input>
            </label>
            <label for="roles" class="form-label" >Rol
                <select name="roles" class="form-control shadow-none" id="roles" required>
                </select>
            </label>
            <label for="nombre" class="form-label" >Domicilio
                <input type="" class="form-control shadow-none" id="nombre" placeholder="Juancito" required>
                </input>
            </label>
            <label for="nombre" class="form-label" >Codigo Postal
                <input type="" class="form-control shadow-none" id="nombre" placeholder="Juancito" required>
                </input>
            </label>
            <label for="nombre" class="form-label" >Observaciones
                <input type="" class="form-control shadow-none" id="nombre" placeholder="Juancito" required>
                </input>
            </label>
        </form>