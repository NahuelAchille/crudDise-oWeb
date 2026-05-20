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
    <main class="main-content-desktop d-flex flex-column">
        <div class="p-2 shadow" style="color: #055160;">
            <article class="d-flex gap-2 align-items-center">
                <i class="bi bi-people-fill nav-icon"></i>
                <span>Gestión de Usuarios</span>
            </article>
        </div>
        <div class="tabla-de-usuarios p-3 m-3 mb-0 overflow-hidden rounded">
          <div class="p-3 rounded rounded-bottom-0 d-flex gap-3 align-items-center text-white" style="background-color: #055160;">
              <i class="bi bi-people-fill fs-2"></i>
              <span>
                    Listado de Usuarios
              </span>
              <a class="btn ms-auto fw-semibold text-nowrap rounded text-decoration-none text-white" style="background-color: #20C997;" href="formUser.php">+ Agregar</a>
          </div>
          <div class="p-3 rounded-bottom" style="background-color: #5DA9B8;">
            <div class="input-info">
              <label for="search" class="form-label d-block col-12 col-lg-3 m-0">
                <div class="input-group shadow">
                  <span class="input-group-text" id="input-icon">
                      <i class="bi bi-search"></i>
                  </span>
                  <input type="text" class="form-control shadow-none" id="search" placeholder="Buscar por nombre, email o DNI">
                </div>
              </label>
            </div>
          <div class="table-responsive shadow rounded mt-4">  
            <table class="table table-striped-columns m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>DNI</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Fecha de Registro</th>
                        <th  style="width: 160px;">Acciones</th>
                    </tr>
                </thead>
                <?php include '../../includes/tableUserList.php'; ?>
            </table>
            </div>
            </div>
        </div>  
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>