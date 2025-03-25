<!-- resources/views/navbar.blade.php -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

<div class="plus-jakarta-sans">
    <nav class="navbar" id="navbar">
       {{--  <div class="navbar-links">
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('about') }}">Acerca de</a>
            <a href="{{ route('nosotros') }}">Nosotros</a>
            <a href="{{ route('descargar') }}">Descargar app</a>
        </div> --}}
        <div class="navbar-register">
            <a href="{{ route('ingresar') }}" class="registrarse">Salir</a>
        </div>
    </nav>
</div>

<style>

/* Fuente personalizada */
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap');

body {
    margin: 0;
    padding: 0;
    padding-top: 60px;
    font-family: "Plus Jakarta Sans", sans-serif;
}

/* Navbar */
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #bed3d6;
    padding: 20px 20px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: transform 0.4s ease-in-out;
}

/* Ocultar navbar al hacer scroll */
.hidden-navbar {
    transform: translateY(-100%);
}

/* Enlaces */
.navbar-links {
    display: flex;
    gap: 50px;
    flex-grow: 1;
    justify-content: center;
}

.navbar a {
    color: #010002;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s ease-in-out;
    font-weight: 500;
}

.navbar a:hover {
    color: #1f60a5;
}

/* Botón de registro */
.navbar-register a.registrarse {
    display: inline-block;
    padding: 8px 18px;
    background-color: #505dbf;
    color: white;
    border-radius: 25px;
    font-size: 18px;
    font-weight: 500;
    transition: background-color 0.2s ease-in-out, transform 0.2s ease;
}

.navbar-register a.registrarse:hover {
    background-color: #2c95be;
}


.navbar-register a.registrarse:active {
    transform: scale(0.95); /* Hace que el botón se "undee" un 5% */
    background-color: #4a83b3; /* Puedes cambiar el color de fondo al presionar */
}


</style>


<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function() {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scrolleando hacia abajo: Ocultar navbar
            navbar.classList.add("hidden-navbar");
        } else {
            // Scrolleando hacia arriba: Mostrar navbar
            navbar.classList.remove("hidden-navbar");
        }
        
        lastScrollTop = scrollTop;
    });
</script>
