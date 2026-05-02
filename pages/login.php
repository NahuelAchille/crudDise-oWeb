<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Panel de Administración</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/CRUDDISEÑOWEB/public/css/style.css">
</head>
<body id="bodyLogin">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">

    <div class="text-center mb-4">
      <i class="bi bi-shield-lock" id="shield"></i>
      <h3 class="text-center text-white">Panel de Administración</h3>
      <p class="text-center text-light" >Por favor ingrese sus credenciales para continuar</p>
    </div>

    <div class="card p-4 shadow" id="cardForm">
      <form method="POST" action="login.php">
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="Usuario@ejemplo.com" required>
        </div>
        <div class="mb-3 position-relative">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="********" required>
      
          <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor:pointer;">
            <i class="bi bi-eye" id="togglePassword"></i>
          </span>
        </div>
        <button type="submit" class="btn btn-primary w-100" style="background-color: #055160">Ingresar</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
