<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;**600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="d-flex flex-column">
    <nav class="navbar-expand p-2 w-100 sticky-top" style="background-color: #055160;">
    <div class="container-fluid conteiner-nav d-flex justify-content-between align-items-center gap-3">
        <a class="text-white d-flex fw-semibold fs-5 justify-content-center align-items-center text-decoration-none" href="#">
            <i class="bi bi-shield-lock-fill me-1 nav-icon text-center" id="textAdmin" ></i>
            <span>Admin</span>
        </a>
        
        <div class="content-fluid d-flex flex-row align-items-center gap-1" id="navbarNav">
        <ul class="navbar-nav gap-4">
                <li class="text-center">
                    <a class="text-white" href="#" title="Tareas">
                        <i class="bi bi-clipboard-check nav-icon"></i>
                
                    </a>
                </li>
                <li class="text-center">
                    <a class="text-white" href="#" title="Etiquetas">
                        <i class="bi bi-tags-fill nav-icon"></i>
                
                    </a>
                </li>
                <li class="text-center">
                    <a class="text-white" href="#" title="Usuarios">
                        <i class="bi bi-people-fill nav-icon"></i>
            
                    </a>
                </li>
                <li class="text-center">

                </li>
        </ul>
        <div class="rounded-1 py-1 px-1" style="background-color: #5DA9B8;">
                <a class="text-white d-flex flex-column text-decoration-none align-items-center justfy-content-center gap-0" href="#" title="Admin">
                    <i class="bi bi-person-circle nav-icon"></i>
                    <span class="text-center" id="User">admin</span>
                </a>
            </div>
        </div>
    </div>
    </nav>