<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guanentino, ¡Responda!</title>

  <!-- Tu CSS externo -->
  <link rel="stylesheet" href="style.css?v=3">

  <!-- CSS inline de centrado y botones -->
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body { height: 100%; }
    body {
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    #navbar { width: 100%; background: #222; }
    #navbar .nav-container {
      max-width: 1100px; margin: 0 auto; padding: 1rem;
      display: flex; justify-content: center; align-items: center;
      gap: 2rem; flex-wrap: wrap;
    }
    #navbar .logo { font-size: 1.25rem; font-weight: 700; color: #ffd700; text-decoration: none; }
    #navbar .nav-links { list-style: none; display: flex; gap: 1.25rem; }
    #navbar .nav-link { color: #fff; text-decoration: none; font-weight: 600; }
    #navbar .nav-link:hover { color: #ffd700; }

    section {
      width: 100%; max-width: 800px; margin: 2rem auto;
      display: flex; flex-direction: column; align-items: center;
      justify-content: center; text-align: center; padding: 0 1rem;
    }
    .hero { min-height: 70vh; }
    .hero img { margin-bottom: 1rem; }
    .hero h1 { margin: 0.5rem 0; color: #111; }
    .hero .subtitle { margin-bottom: 1rem; font-size: 1.1rem; color: #555; }

    .btn {
      background: #ffd700; color: #000; text-decoration: none;
      padding: 0.8rem 1.2rem; border-radius: 8px; font-weight: 700;
      display: inline-block; margin: 0.5rem; transition: 0.2s;
    }
    .btn:hover { background: #000; color: #ffd700; }

    .form-container {
      border: 1.5px solid #ddd; border-radius: 12px; padding: 2rem;
      width: 90%; max-width: 420px; background: #fff; color: #111;
    }
    .form-container h2 { margin-bottom: 1rem; }
    .buttons-container { display: flex; flex-direction: column; gap: 1rem; }
    .info-item { margin: 0.8rem 0; }
    .info-item h4 { margin-bottom: 0.3rem; color: #333; }

    footer { width: 100%; background: #222; color: #fff; padding: 1rem; margin-top: auto; }
  </style>
</head>

<body class="login-page">
  <!-- Navegación -->
  <nav id="navbar">
    <div class="nav-container">
      <a href="#home" class="logo">GUANENTINO</a>
      <ul class="nav-links" id="navLinks">
        <li><a href="#home" class="nav-link">Inicio</a></li>
        <li><a href="#about" class="nav-link">Proyecto</a></li>
        <li><a href="#login" class="nav-link">Ingresar</a></li>
        <li><a href="#contact" class="nav-link">Contacto</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero -->
  <section id="home" class="hero">
    <div class="hero-content">
      <img src="img/guanenta.png" alt="Logo de Guanentino Responda" width="150" height="150">
      <h1><span>¡Guanentino, Responda!</span></h1>
      <p class="subtitle">Sistema de Gestión Académica</p>
      <a href="#login" class="btn">Ingresar</a>
    </div>
  </section>

<!-- Sección: Información del Proyecto -->
<section id="proyecto" class="info-section">
  <div class="info-container">
    <h2>Sobre el Proyecto</h2>
    <p><strong>Nombre:</strong> ¡Guanentino, Responda!</p>
    <p><strong>Líder:</strong> Edwin Santiago Plata Torrado</p>
    <p><strong>Integrantes:</strong> 
      Sarith Daniela Figueredo Morales, 
      Jose Luis Garces Porras, 
      Mayra Alejandra Melgarejo Peñuela, 
      Keiner Santiago Romero Delgado
    </p>

    <h2>Planteamiento del Problema</h2>
    <p>
      Muchos estudiantes enfrentan dificultades en el ICFES porque memorizan sin comprender. 
      La falta de práctica en pensamiento crítico y análisis impide resolver problemas de forma lógica. 
      Además, los ven como una obligación aburrida y no como una oportunidad de crecimiento.
    </p>

    <h2>Consecuencias</h2>
    <ul>
      <li>Mal desempeño en el ICFES limita acceso a universidades y becas.</li>
      <li>Reduce la movilidad social y oportunidades laborales.</li>
      <li>Afecta la reputación del colegio.</li>
      <li>Genera desinterés generalizado en los estudiantes.</li>
    </ul>

    <h2>Aporte</h2>
    <p>
      Se implementará una plataforma web con HTML, CSS, PHP y MySQL, alojada en InfinityFree, que permitirá:
    </p>
    <ul>
      <li>Creación de quizzes tipo ICFES filtrados por asignatura y grado.</li>
      <li>Acceso mediante PIN único, similar a Kahoot.</li>
      <li>Retroalimentación inmediata con explicación de respuestas.</li>
      <li>Estadísticas y reportes para docentes.</li>
      <li>Un banco de preguntas colaborativo.</li>
    </ul>

    <h2>Objetivo General</h2>
    <p>
      Desarrollar una plataforma web interactiva que facilite la preparación de los estudiantes del 
      Colegio San José de Guanentá para las pruebas ICFES, promoviendo el aprendizaje significativo 
      y el pensamiento crítico.
    </p>

    <h2>Objetivos Específicos</h2>
    <ul>
      <li>Permitir la creación y gestión de preguntas tipo ICFES.</li>
      <li>Facilitar el acceso a cuestionarios mediante PINs únicos.</li>
      <li>Implementar retroalimentación inmediata en cada respuesta.</li>
      <li>Desarrollar reportes estadísticos de rendimiento.</li>
      <li>Ofrecer una experiencia adaptable a móviles y computadoras.</li>
      <li>Permitir la colaboración docente con un banco de preguntas.</li>
    </ul>
  </div>
</section>


  <!-- Inicio de Sesión -->
  <section id="login" class="login-section">
    <div class="form-container">
      <h2>Inicio de Sesión</h2>
      <div class="buttons-container">
        <a href="modelo/login_admin.php" class="btn">Administrador</a>
        <a href="modelo/login_docente.php" class="btn">Docente</a>
        <a href="modelo/login_digitador.php" class="btn">Digitador</a>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section id="contact" class="contact">
    <div class="form-container">
      <h2>Contacto</h2>
      <div class="info-item">
        <h4>Email</h4>
        <p>soporte@guanentino.com</p>
      </div>
      <div class="info-item">
        <h4>Teléfono</h4>
        <p>+57 300 000 0000</p>
      </div>
      <div class="info-item">
        <h4>Ubicación</h4>
        <p>San Gil, Santander</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>2025 Guanentino, ¡Responda!</p>
  </footer>
</body>
</html>
