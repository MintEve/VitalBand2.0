<!-- resources/views/navbar.blade.php -->
<div class="">
    <nav class="navbar" id="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('images/vitalbandlogo.png') }}" alt="Logo" class="logo">
        </div>
        <div class="navbar-links">
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('about') }}">Acerca de</a>
            <a href="{{ route('nosotros') }}">Nosotros</a>
        </div>
        <div class="navbar-register">
            <a href="{{ route('ingresar') }}" class="registrarse">Regístrate</a>
        </div>
    </nav>
</div>

<style>
/* Estilo para el Navbar */
.navbar {
    background-color: #d8e8ea; /* Fondo del navbar, color suave */
    display: flex; /* Usamos flexbox para distribuir los elementos dentro del navbar */
    justify-content: flex-end; /* Alinea todo el contenido del navbar hacia la derecha */
    align-items: center; /* Centra los elementos verticalmente */
    padding: 12px 20px; /* Espaciado interior (10px arriba/abajo y 20px a los lados) */
    border-radius:20px; /* Redondea las esquinas del navbar */
    box-shadow: 5 4px 9px rgba(4, 4, 32, 0.1); /* Sombra sutil debajo del navbar */
    position: fixed; /* El navbar se mantiene fijo en la parte superior */
    top: 0; /* Posición en la parte superior de la página */
    left: 0; /* Posición en el lado izquierdo */
    width: 100%; /* El navbar ocupa el 100% del ancho de la pantalla */
    z-index: 100; /* Asegura que el navbar esté por encima de otros elementos */
    transition: top 0.3s ease-in-out; /* Transición suave al ocultarse o mostrarse */
}

/* Contenedor del logo */
.navbar-logo {
    margin-right: auto; /* Alinea el logo a la izquierda del navbar */
    padding: 0; /* Elimina cualquier padding que pueda agregar espacio extra */
    display: flex; /* Usa flexbox para alinear la imagen de forma más controlada */
    align-items: center; /* Centra la imagen verticalmente */
}

/* Estilo para la imagen del logo */
.logo {
    height: 50px; /* Aumenta la altura del logo para hacerlo más grande */
    width: auto; /* Mantiene la proporción del logo */
    margin: 0; /* Elimina los márgenes adicionales */
    padding: 0; /* Elimina cualquier padding que pudiera agregar espacio extra */
}

/* Enlaces del navbar (Inicio, Acerca de, Nosotros) */
.navbar-links a {
    text-decoration: none; /* Elimina el subrayado de los enlaces */
    color: #333; /* Color del texto de los enlaces */
    margin: 0 15px; /* Espaciado entre los enlaces */
    font-size: 17px; /* Tamaño de fuente de los enlaces */
    font-weight: 500; /* Peso de la fuente para darle algo de énfasis */
}

/* Efecto hover para los enlaces del navbar */
.navbar-links a:hover {
    color: #146aa3; /* Cambia el color del texto cuando el cursor pasa sobre el enlace */
    text-decoration:underline; /* Agrega subrayado cuando se pasa el cursor */
    cursor: pointer; /* Cambia el cursor a una mano indicando que es clickeable */
}


/* Estilo para el área de "Registrarse" */
.navbar-register {
    margin-left: 20px; /* Alinea el botón hacia la derecha, un pequeño margen */
}

/* Estilo para el botón "Regístrate" */
.navbar-register a.registrarse {
    text-decoration: none; /* Elimina el subrayado */
    background-color: #185b7c; /* Azul marino como color de fondo del botón */
    color: white; /* Color del texto del botón (blanco) */
    padding: 10px 20px; /* Relleno interior del botón (10px arriba/abajo, 20px a los lados) */
    border-radius: 5px; /* Esquinas redondeadas del botón */
    font-size: 17px; /* Tamaño de fuente del texto del botón */
    transition: all 0.3s ease-in-out; /* Transición suave para los efectos de hover y active */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra sutil debajo del botón */
}

/* Efecto hover para el botón "Regístrate" */
.navbar-register a.registrarse:hover {
    background-color: #22b1b1; /* Cambia el color de fondo a turquesa cuando se pasa el cursor */
    cursor: pointer; /* Cambia el cursor a una mano indicando que es clickeable */
}

/* Efecto cuando el botón "Regístrate" está presionado */
.navbar-register a.registrarse:active {
    box-shadow: inset 0 4px 6px rgba(0, 0, 0, 0.2); /* La sombra se hace más intensa cuando se presiona */
    transform: translateY(2px); /* El botón parece hundirse un poco al hacer clic */
}

/* Clase para ocultar el navbar cuando se hace scroll hacia abajo */
.hidden-navbar {
    top: -80px; /* Desplaza el navbar fuera de la pantalla al hacer scroll hacia abajo */
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
