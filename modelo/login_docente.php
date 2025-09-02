<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Docente</title>
  <link rel="stylesheet" href="../style.css"> 
</head>
<body class="login-page">

  <header>
    <h1><span>¡Guanentino, Responda!</span></h1>
    <p>Acceso exclusivo para docentes</p>
  </header>

  <!-- Formulario -->
  <main>
    <section class="form-container">
      <h2>Iniciar sesión - Docente</h2>
      <form action="loguearse_docente.php" method="POST" class="login-form">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" placeholder="docente@ejemplo.com" required>

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
