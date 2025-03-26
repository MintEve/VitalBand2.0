<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

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
                <li><a href="{{ route('ingresar') }}">Iniciar sesión</a></li>
            </ul>
        </div>

        <!-- Sección 3: Contacto -->
        <div class="footer-section contact">
            <h3>Contacto</h3>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <span>soporte@vitalband.com</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <span>+52 123 456 7890</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>Ciudad de México, México</span>
            </div>
        </div>

        <!-- Sección 4: Redes Sociales -->
        <div class="footer-section social">
            <h3>Síguenos</h3>
            <div class="social-icons">
                <a href="https://facebook.com/vitalband" target="_blank" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/vitalband" target="_blank" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com/vitalband" target="_blank" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://youtube.com/vitalband" target="_blank" class="social-icon">
                    <i class="fab fa-youtube"></i>
                </a>
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
    background: #2c3e50;
    color: white;
    padding: 40px 0 0;
    width: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Contenedor del footer */
.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 20px;
}

/* Secciones dentro del footer */
.footer-section {
    flex: 1;
    min-width: 200px;
    padding: 0 15px 25px;
}

.footer-section h2 {
    font-size: 20px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #1abc9c;
}

.footer-section h3 {
    font-size: 18px;
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
    color: #ecf0f1;
    text-decoration: none;
    transition: color 0.3s ease;
    font-size: 14px;
}

.footer-section ul li a:hover {
    color: #1abc9c;
}

/* Estilos de la sección de contacto */
.contact-item {
    display: flex;
    align-items: center;
    margin: 12px 0;
    color: #ecf0f1;
    font-size: 14px;
}

.contact-item i {
    margin-right: 10px;
    color: #1abc9c;
    width: 16px;
    text-align: center;
    font-size: 14px;
}

/* Redes Sociales */
.social-icons {
    display: flex;
    gap: 12px;
}

.social-icon {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 14px;
    text-decoration: none;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.1);
}

.social-icon:hover {
    background: #1abc9c;
    transform: translateY(-2px);
}

/* Línea inferior */
.footer-bottom {
    text-align: center;
    padding: 15px 0;
    background: rgba(0, 0, 0, 0.2);
    font-size: 15px;
    margin-top: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        gap: 25px;
    }
    
    .footer-section {
        padding-bottom: 0;
    }
}
</style>