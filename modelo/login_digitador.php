<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Digitador</title>
  <link rel="stylesheet" href="../style.css"> <!-- ✅ importante, sube una carpeta -->
</head>
<body class="login-page">
  <!-- Encabezado -->
  <header>
    <h1><span>¡Guanentino, Responda!</span></h1>
    <p>Acceso exclusivo para digitadores</p>
  </header>

  <!-- Formulario -->
  <main>
    <section class="form-container">
      <h2>Iniciar sesión - Digitador</h2>
      <form action="loguearse_digitador.php" method="POST" class="login-form">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" placeholder="digitador@ejemplo.com" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="contraseña" id="password" placeholder="Ingrese su contraseña" required>

        <button type="submit" class="btn">Ingresar</button>
      </form>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <p></p>
  </footer>
</body>
</html>
