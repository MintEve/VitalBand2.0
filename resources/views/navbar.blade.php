<!-- resources/views/navbar.blade.php -->

<nav class="navbar">
    <a href="{{ route('inicio') }}">Inicio</a>
    <a href="{{ route('about') }}">Acerca de</a>
    <a href="{{ route('nosotros') }}">Nosotros</a>
    <a href="{{ route('descargar') }}">Descargar app</a>
    <a href="{{ route('ingresar') }}">Regístrate</a>
</nav>

<style>
    /* Estilos para el navbar */
    .navbar {
        position: fixed;  /* Fija el navbar en la parte superior */
        top: 0;           /* Asegura que quede pegado arriba */
        left: 0;          /* Asegura que inicie desde el borde izquierdo */
        width: 100%;      /* Ocupa todo el ancho de la pantalla */
        background: #9aadc2; /* Color de fondo */
        padding: 18px 20px; /* Espaciado interno */
        box-sizing: border-box; /* Evita problemas con padding */
        display: flex;    /* Usa flexbox para organizar los elementos */
        justify-content: space-around; /* Distribuye los enlaces uniformemente */
        border-bottom: 3px solid #333; /* Línea debajo del navbar */

    }

    .navbar a {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }

    /* Elimina el margen y padding del body */
    body {
        margin: 0;
        padding: 0;
        padding-top: 60px; /* Asegura que el contenido no quede oculto por el navbar */
    }

    
</style>
