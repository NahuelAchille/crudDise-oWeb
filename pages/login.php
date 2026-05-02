<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Panel de Administración</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="../public/css/login.css">
</head>
<body id="bodyLogin" class="d-flex flex-column" >
    <div class="d-flex flex-column align-items-center flex-grow-1 login-container">

    <div class="text-center mb-4">
      <i class="bi bi-shield-lock-fill" id="shield"></i>
      <h3 class="text-center text-white">Panel de Administración</h3>
      <p class="text-center text-light" >Por favor ingrese sus credenciales para continuar</p>
    </div>

    <div class="card p-4 shadow" id="cardForm">
      <form method="POST" action="login.php">
        <div class="mb-3 input-info">
          <label for="email" class="form-label">Correo electrónico</label>
          <div class="input-group shadow-sm">
            <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-envelope-fill"></i>
            </span>
            <input type="email" class="form-control shadow-none" id="email" placeholder="Usuario@ejemplo.com" required>
          </div>
        </div>
        <div class="mb-3 input-info">
          <label for="password" class="form-label">Contraseña</label>
            <div class="input-group shadow-sm">
              <span class="input-group-text" id="basic-addon">
                <i class="bi bi-lock-fill"></i>
              </span>
              <input type="password" class="form-control border-end-0 shadow-none" id="password" placeholder="Contraseña" required>
              <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                    <i class="bi bi-eye-fill"></i>
              </span>
            </div>
        </div>
        <button type="submit" class="btn btn w-100" style="background-color: #087990; color:white">Ingresar</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
