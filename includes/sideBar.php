<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <nav class="d-flex flex-column flex-shrink-0 p-3 text-white h-100" style="background-color: #055160; width: 20rem; position:fixed">
        <div class="d-flex flex-column container-fluid gap-5 h-100">
            <div>  
                <a class="d-flex flex-column text-white nav-link fw-semibold fs-4" href="#">
                <i class="bi bi-shield-lock-fill me-1 fs-1" id="textAdmin" ></i>
                <span>Panel Admin</span>
                <span class="fs-6 fw-normal">Sistema de Gestión</span>
                </a>
            </div>
            <div class="content-fluid d-flex h-100 flex-column justify-content-between" id="navbarNav">
            <ul class="navbar-nav gap-3">
                    <li class="text-center">
                        <a class="text-white nav-link d-flex gap-3 fw-semibold" href="#" title="Tareas">
                            <i class="bi bi-clipboard-check fs-2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a class="text-white nav-link d-flex gap-3 fw-semibold" href="#" title="Etiquetas">
                            <i class="bi bi-tags-fill fs-2"></i>
                            <span>Roles</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a class="text-white nav-link d-flex gap-3 fw-semibold" href="#" title="Usuarios">
                            <i class="bi bi-people-fill fs-2"></i>
                            <span>Usuarios</span>
                        </a>
                    </li>
            </ul>
                <div class="text-center d-flex justify-content-center border-top pt-1">
                    <a class="text-white nav-link d-flex flex-row gap-3" href="#" title="Admin">
                        <i class="bi bi-person-circle fs-1"></i>  
                        <div class="d-flex flex-column">
                            <span class="fw-semibold">Administrador del Sistema</span>
                            <span class="text-start" id="User">drhrd</span>  
                        </div>       
                    </a>
                </div>
            </div>
        </div>
    </nav>