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
                <span>Gestión de Roles</span>
            </article>
        </div>
          <div class="p-3 m-3 mb-0">
            <div class="p-3 rounded rounded-bottom-0 d-flex gap-3 align-items-center text-white" style="background-color: #055160;">
                <i class="bi bi-tags-fill fs-2"></i>
                <span>
                    Listado de Roles
                </span>
                <button class="btn text-white ms-auto fw-semibold" style="background-color: #20C997;">+ Agregar</button>
            </div>  
            <div class="table-responsive shadow-sm rounded-bottom">  
                <table class="table table-striped-columns m-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Usuarios Asignados</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <?php include '../../includes/tableRol.php'; ?>
                </table>
            </div>
          </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>