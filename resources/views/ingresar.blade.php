<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/ingresar.css">

    <title>VitalBand - Iniciar Sesión</title>
  
</head>
<body>
    <a href="{{ route('inicio') }}" class="back-button">
        <i class="fas fa-arrow-left"></i>
    </a>
</button>

    <div class="login-container">
        <!-- Sección de bienvenida -->
        <div class="welcome-section">
            <div class="welcome-content">
                <img src="{{ asset('images/vitalbandlogo.png') }}" alt="VitalBand Logo" class="logo">
                <h2>Necesitas una cuenta?</h2>
                <p>Desbloquea todas las funcionalidades de Vitalband descargando la App.</p>
                <button class="btn-register">Descargar la App</button>
            </div>
        </div>
        
        <!-- Sección de formulario -->
        <div class="form-section">
            <div class="form-container">
                <h1>Iniciar sesión</h1>
                @csrf
                <div class="input-group">
                    <i class="input-icon fas fa-user"></i>
                    <input type="text" placeholder="Nombre de usuario" class="nombreUsuario" required>
                </div>
                <div class="input-group">
                    <i class="input-icon fas fa-lock"></i>
                    <input type="password" placeholder="Contraseña" class="password" id="passwordField" required>
                    <i class="password-toggle fas fa-eye" id="togglePassword"></i>
                </div>
                <button type="submit" onclick="sendData()" class="btn-login">Entrar</button>
            </div>
        </div>
    </div>

    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: "{{ session('error') }}",
            showConfirmButton: true,
        });
    </script>
    @endif

    <script>
        // Función para mostrar/ocultar contraseña
        const togglePassword = document.querySelector('#togglePassword');
        const passwordField = document.querySelector('#passwordField');
        
        togglePassword.addEventListener('click', function() {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });

        function sendData() {
            const nombreUser = document.querySelector(".nombreUsuario").value;
            const contrasena = document.querySelector(".password").value;

            if (!nombreUser || !contrasena) {
                Swal.fire({
                    icon: 'error',
                    title: 'Campos vacíos',
                    text: 'Por favor completa todos los campos',
                    showConfirmButton: false,
                    timer: 2000
                });
                return;
            }

            fetch('/set-parameters', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    param1: nombreUser,
                    param2: contrasena
                })
            })
            .then(response => {
                if (response.ok) {
                    window.location.href = '{{ asset("/usuarios") }}';
                } else {
                    return response.json().then(err => { throw err; });
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: error.message || 'Error al iniciar sesión',
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        }

        // Permitir enviar con Enter
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendData();
                }
            });
        });
    </script>
</body>
</html>