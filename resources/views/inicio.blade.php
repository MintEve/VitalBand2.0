<!-- resources/views/inicio.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    @include('navbar') <!-- Incluye la barra de navegación -->
    <h1>Conecta. Siente. Rinde</h1>
    <p class="uniquifier">Bienvenido a la página de inicio.</p>


  
</body>
</html>

<style>
   

    /* Fondo de la página */
    body {

    }

    h1 {
        text-align: center;
        margin-top: 100px;
    }

    p {
        text-align: center;
    }

    
   
</style>
