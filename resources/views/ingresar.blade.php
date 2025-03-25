<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/ingresar.css') }}">
    @include('components/navbar')
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="login-wrapper">
        <!-- Sección de bienvenida -->
        <div class="welcome-container">
            <h2>¡Hola, Bienvenido!</h2>
            <p>¿Eres nuevo en Vitalband?</p>
            <button class="btn-register">Descarga la app</button>
        </div>
        <!-- Sección de inicio de sesión -->
        <div class="login-container">
            <h1>Iniciar sesión</h1>
            @csrf
            <input type="text" placeholder="Username" class="nombreUsuario" required>
            <input type="password" placeholder="Contraseña" class="password" required>
            <button type="submit" onclick="sendData()" class="btn-login">Entrar</button>
            <p class="forgot-password">¿Olvidaste tu contraseña?</p>
        </div>
    </div>
    @include('components/footer')
</body>
</html>

@if(session('error'))
<script>
     Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
</script>
@endif

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
        .then((respuesta) => {

            window.location.href = '{{ asset("/usuarios") }}'

           // alert("hola");
            // Redirigir después de guardar los parámetros en la sesión
            //window.location.href = '{{ asset("/usuarios") }}';
        });
    }
</script>


<style>
 /* Aplica el box-sizing solo al navbar importado */
 * {
            box-sizing: border-box;
        }
</style>


