<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
</head>
<body>
    @include('navbar') <!-- Incluye la barra de navegación -->

  <!-- area de componente propia individual -->
  <div class="divPrincipal">
    <h1>Login</h1>
    <!-- input para ingresar dato  -->
    <input class="nombreUsuario" placeholder="Nombre usuario"> 
    <input class="password"  type="password"  placeholder="Contraseña"> 

    <!-- boton para enviar datos a a funcion mediante una promesa  -->
    <button onclick="sendData()">Entrar</button>
</div>

<script>
    function sendData() {

        // input depositado en una variable 
        const nombreUser = document.querySelector(".nombreUsuario").value
        const contrasena = document.querySelector(".password").value


        // Aquí guardas los parámetros en la sesión usando JavaScript y un request AJAX
        fetch('/set-parameters', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Asegúrate de incluir el token CSRF
            },
            body: JSON.stringify({
                param1: nombreUser, // se incertan las variables extraidas del input 
                param2: contrasena
            })
        })
        .then(() => {
            
            // Redirigir después de guardar los parámetros en la sesión
            window.location.href = '{{ asset("/usuarios") }}';
        });
    }
</script>


</body>

</html>


