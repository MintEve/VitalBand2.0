<footer class="footer">
    <div class="footer-container">
        <!-- Sección 1: Logo y descripción -->
        <div class="footer-section about">
            <h2>VitalBand</h2>
            <p>Monitoreo inteligente de signos vitales para tu bienestar. Innovación y salud en un solo dispositivo.</p>
        </div>

        <!-- Sección 2: Enlaces útiles -->
        <div class="footer-section links">
            <h3>Enlaces útiles</h3>
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('about') }}">Acerca de</a></li>
                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                <li><a href="{{ route('descargar') }}">Descargar App</a></li>
            </ul>
        </div>

        <!-- Sección 3: Contacto -->
        <div class="footer-section contact">
            <h3>Contacto</h3>
            <p><strong>Email:</strong> soporte@vitalband.com</p>
            <p><strong>Teléfono:</strong> +52 123 456 7890</p>
            <p><strong>Ubicación:</strong> Ciudad de México, México</p>
        </div>

        <!-- Sección 4: Redes Sociales -->
        <div class="footer-section social">
            <h3>Síguenos</h3>
            <div class="social-icons">
                <a href="#" class="social-icon">📘</a> <!-- Facebook -->
                <a href="#" class="social-icon">🐦</a> <!-- Twitter -->
                <a href="#" class="social-icon">📸</a> <!-- Instagram -->
                <a href="#" class="social-icon">🔗</a> <!-- LinkedIn -->
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} VitalBand - Todos los derechos reservados.</p>
    </div>
</footer>


<style>
    /* Estilos generales del footer */
.footer {
    background: #2c3e50; /* Azul oscuro elegante */
    color: white;
    padding: 40px 0;
    width: 100%;
    position: relative;
    bottom: 0;
    margin-top: auto;
}

/* Contenedor del footer */
.footer-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

/* Secciones dentro del footer */
.footer-section {
    flex: 1;
    min-width: 250px;
    padding: 20px;
}

.footer-section h2, .footer-section h3 {
    font-size: 20px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #1abc9c;
}

/* Enlaces del footer */
.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin: 10px 0;
}

.footer-section ul li a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: #1abc9c;
}

/* Estilos de la sección de contacto */
.footer-section p {
    margin: 5px 0;
}

/* Redes Sociales */
.social-icons {
    display: flex;
    gap: 10px;
}

.social-icon {
    font-size: 22px;
    text-decoration: none;
    color: white;
    transition: transform 0.3s ease, color 0.3s ease;
}

.social-icon:hover {
    color: #1abc9c;
    transform: scale(1.1);
}

/* Línea inferior */
.footer-bottom {
    text-align: center;
    padding: 15px 0;
    background: #233140;
    font-size: 16px;
}

</style>