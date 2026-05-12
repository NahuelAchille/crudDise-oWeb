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
                <i class="bi bi-clipboard-check nav-icon"></i>
                <span>Dashboard</span>
            </article>
        </div>
        <ul class="navbar-nav d-flex flex-column flex-md-row p-3 flex-wrap">
            <li class="col-11 col-lg-5 shadow rounded-3 m-3 p-4 fs-3 gap-3 d-flex flex-fill align-items-center">
                    <i class="bi bi-people-fill p-3 display-4 rounded text-white" style="background-color: #FFDA6A;"></i>
                    <span class="display-4 fw-semibold">20</span>
                    <span class="ms-auto text-end">Total de Usuarios</span>
            </li>
            <li class="col-11 col-lg-5 shadow rounded-3 m-3 p-4 fs-3 gap-3 d-flex flex-fill align-items-center">
                    <i class="bi bi-person-check-fill p-3 display-4 rounded text-white" style="background-color: #79DFC1;"></i>
                    <span class="display-4 fw-semibold">20</span>
                    <span class="ms-auto text-end">Usuarios Activos</span>
            </li>
            <li class="col-11 col-lg-5 shadow rounded-3 m-3 p-4 fs-3 gap-3 d-flex flex-fill align-items-center">
                    <i class="bi bi-tags-fill p-3 display-4 rounded text-white" style="background-color: #6EDFF6;"></i>
                    <span class="display-4 fw-semibold">20</span>
                    <span class="ms-auto text-end">Total de Roles</span>
            </li>
            <li class="col-11 col-lg-5 shadow rounded-3 m-3 p-4 fs-3 gap-3 d-flex flex-fill align-items-center">
                    <i class="bi bi-person-x-fill p-3 display-4 rounded text-white" style="background-color: #EA868F;"></i>
                    <span class="display-4 fw-semibold">20</span>
                    <span class="ms-auto text-end">Usuarios Inactivos</span>
            </li>
        </ul>
        <div class="p-3 m-3 mb-0">
            <div class=" p-2 rounded rounded-bottom-0 d-flex gap-3 align-items-center text-white" style="background-color: #055160;">
                <i class="bi bi-clock-history fs-3"></i>
                <span>
                    Últimos usuarios Registrados
                </span>
                <button class="btn text-white ms-auto fw-semibold" style="background-color: #20C997;">Ver Todos</button>
            </div>  
            <div class="table-responsive shadow-sm rounded-bottom">  
                <table class="table table-striped-columns m-0">
                    <thead>
                            <tr>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Email</th>
                            <th>Fecha de Registro</th>
                            </tr>
                    </thead>
                    <?php include '../../includes/tableUserlimit10.php'; ?>
                </table>
            </div>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>