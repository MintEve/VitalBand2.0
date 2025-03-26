<!-- resources/views/inicio.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css')}}">
    @include('components/navbar') <!-- Incluye la barra de navegación -->
</head>
<script>
  document.addEventListener("DOMContentLoaded", function () {
      // Esperamos un pequeño retraso para que se note la animación
      setTimeout(() => {
          document.querySelector(".hero").classList.add("show");
      }, 200);
  });
</script>

<body>
    <main>
      @yield('content')
        <!-- INICIO "CONECTA. SIENTE. RINDE" -->
        <section class="hero">
          <h1>Conecta, siente, rinde.</h1>
          <p>Monitorea tu salud y mejora tu calidad de vida.</p>
        </section>
        <!-- CARDS DE INICIO -->
        <section class="features">
          <div class="feature small-card">
            <h3>Monitoreo de Salud</h3>
            <img src="{{ asset('images/bandabrazo.png') }}" alt="Logo" class="bandabrazo">
            <p>Rastrea tus signos vitales y actividad física para un mejor control de tu bienestar.</p>
          </div>
          <div class="feature large-card">
            <h3 stu>Análisis de Datos</h3>
            <div class="card-icon">
              <img src="{{ asset('images/computadora.png') }}" alt="Logo" class="logo">
            </div>
            <p style="margin-top: -25px">Obtén insights personalizados sobre tu salud y rendimiento a través de nuestros informes.</p>
          </div>               
          <div class="feature small-card">
            <h3>Descarga la App</h3>
            <img src="{{ asset('images/smartphone.png') }}" alt="Logo" class="smartphone">
            <p style="margin-top:5px">Accede a todas las funcionalidades de Vitalband desde tu dispositivo móvil.</p>
        </section>
      </div>
      <section class="contenedor-cards">
        <!-- Card de fondo -->
        <div class="card-fondo">
          <h2 class="texto-fondo">Monitorea tu salud con <span class="texto-naranja">Vitalband</span></h2>
        </div>
        <!-- Card sobrepuesta -->
        <div class="card-superpuesta">
          <h3 class="texto-card">
              Vitalband es una solución práctica y confiable para mantenerte 
              informado sobre tu estado de salud. Descubre cómo puede ayudarte a 
              mejorar tu calidad de vida.
          </h3>
          <button class="boton-card">Saber más</button>
      </div>      
    </section>
    <section class="seccion-descarga">
      <div class="columna izquierda">
        <img src="{{ asset('images/app-animada.gif') }}" alt="Animación App" class="imagen-animada">
    </div>

      <!-- Columna derecha (Texto y botón) -->
      <div class="columna derecha">
          <h2 class="titulo-descarga">Descarga la App</h2>
          <p class="subtitulo-descarga">
              Explora todas las funcionalidades de Vitalband a través de nuestra app.
          </p>
          <button class="boton-descarga">Ir a descargar App</button>
      </div>
  </section>
      </main>
      @include('components.footer')
</body>
</html>

<style>
  /* Inicialmente oculta y baja el texto */
.hero h1,
.hero p {
    opacity: 0; /* Invisible */
    transform: translateY(40px); /* Se mueve 40px hacia abajo */
    transition: opacity 1.5s ease-out, transform 1.5s ease-out; /* Suavidad */
}

/* Cuando se agrega la clase 'show', aparece */
.hero.show h1,
.hero.show p {
    opacity: 1; /* Aparece */
    transform: translateY(0); /* Llega a su posición */
}

</style>

