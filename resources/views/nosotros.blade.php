<!-- resources/views/inicio.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @include('components/navbar') <!-- Incluye la barra de navegación -->
</head>
<body>
 
    <main>
        <section class="hero">
          <h1>Conecta. Siente. Rinde.</h1>
          <p>Monitorea tu salud y mejora tu calidad de vida.</p>
        </section>
    
        <section class="features">
          <div class="feature small-card">
            <img src="feature-icon-1.svg" alt="Icono de Monitoreo de Salud">
            <h3>Monitoreo de Salud</h3>
            <p>Rastrea tus signos vitales y actividad física para un mejor control de tu bienestar.</p>
          </div>
          <div class="feature large-card">
            <div class="card-icon">
              <img src="icon-image.svg" alt="Icono">
            </div>
            <h3>Análisis de Datos</h3>
            <p>Obtén insights personalizados sobre tu salud y rendimiento a través de nuestros informes detallados.</p>
          </div>
          <div class="feature small-card">
            <img src="feature-icon-2.svg" alt="Icono de Análisis de Datos">
            <h3>Descarga la App</h3>
            <p>Accede a todas las funcionalidades de Vitalband desde tu dispositivo móvil.</p>
          </div>
        </section>
      </main>
</body>
@include('components/footer')
</html>

<style>
    /* Reset de estilos */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Estilos generales */
body {
  font-family: 'Arial', sans-serif;
  color: #333;
  background-color: #f2f7fa; /* Fondo de toda la página */
  line-height: 1.6;
}

/* Estilos de la cabecera */
header {
  background-color: #f5f5f5;
  padding: 1rem;
}

nav ul {
  display: flex;
  justify-content: center;
  list-style-type: none;
}

nav li {
  margin: 0 1rem;
}

nav a {
  color: #666;
  text-decoration: none;
}

nav a:hover {
  color: #333;
}

/* Estilos para la sección .hero */
.hero {
  background-color: #f2f7fa; /* Color de fondo */
  color: #065666; /* Color predeterminado para el texto */
  padding: 4rem 2rem;
  text-align: center;
}

/* Estilos para el encabezado h1 dentro de .hero */
.hero h1 {
  font-family: 'Arial', sans-serif; /* Cambia la fuente */
  font-size: 3rem; /* Cambia el tamaño de la fuente */
  color: #284146; /* Cambia el color de las letras */
  margin-bottom: 1rem;
}

/* Estilos para el párrafo p dentro de .hero */
.hero p {
  font-family: 'Arial', sans-serif; /* Cambia la fuente */
  font-size: 1.3rem; /* Cambia el tamaño de la fuente */
  color: #284146; /* Cambia el color de las letras */
}


/* Estilos de la sección de características */
.features {
  display: flex;
  justify-content: center;
  gap: 2rem;
  padding: 4rem 2rem;
}

.feature {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  text-align: center;
  padding: 2rem;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
  font-family: 'Arial', sans-serif;
}

/* Card más grande */
.large-card {
  flex: 1 1 350px; /* Se hace un poco más grande */
  transform: translateY(-10px); /* Efecto de 3D sutil */
}

.large-card:hover {
  transform: translateY(-15px);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

/* Cards pequeñas */
.small-card {
  flex: 1 1 250px;
  transform: translateY(-5px); /* Efecto de 3D sutil */
}

.small-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.feature img {
  max-width: 80px;
  margin-bottom: 1rem;
}

.feature h3 {
  font-size: 1.4rem;
  margin-bottom: 0.5rem;
}

.feature p {
  font-size: 1rem;
  color: #777;
}

/* Card con icono */
.card-icon {
  margin-bottom: 1.5rem;
}

.card-icon img {
  width: 40px;
  height: 40px;
}

/* Estilos del pie de página */
footer {
  background-color: #f5f5f5;
  color: #666;
  padding: 1rem;
  text-align: center;
}

</style>