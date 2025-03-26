<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    @include('components/navbar') <!-- Incluye la barra de navegación -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
          margin-top: 5ch;
            background-color: #f2f7fa;
            font-family: 'Inter', sans-serif;
            color: #1a1a1a;
        }
        .tech-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.18);
            transition: all 0.3s ease;
        }
        .tech-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        .gradient-text {
            background: linear-gradient(90deg, #3b82f6, #10b981);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .map-container {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Header/Navbar (incluir tu componente aquí) -->
    
    <main class="container mx-auto px-4 py-16">
        <!-- Hero Section -->
        <section class="relative mb-24">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-teal-400 opacity-10 rounded-3xl"></div>
            <div class="relative max-w-7xl mx-auto px-6 py-16 sm:py-24 lg:py-32 text-center" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text">Revolucionando</span> el futuro con tecnología
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    En Hit Solutions, combinamos innovación, pasión y experiencia para crear soluciones que transforman industrias y mejoran vidas.
                </p>
            </div>
        </section>

        <!-- Sección Quiénes Somos -->
        <section class="mb-28" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6 relative inline-block">
                        <span class="relative z-10">¿Quiénes somos?</span>
                        <span class="absolute bottom-0 left-0 w-full h-2 bg-blue-100 z-0 opacity-70" style="bottom: 5px;"></span>
                    </h2>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                      Somos Hit Solutions, un equipo joven y apasionado por la tecnología, trabajamos con humildad y dedicación, 
                      buscando constantemente nuevas formas de utilizar la tecnología para resolver problemas y mejorar la calidad de vida.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                      En Hit Solutions, nos esforzamos por desarrollar soluciones tecnológicas 
                      que mejoren la calidad de vida de las personas y promuevan el bienestar y la prevención de enfermedades.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                      <div class="tech-card p-6 rounded-xl">
                          <div class="text-blue-500 text-3xl mb-4">
                              <i class="fas fa-sync-alt"></i>
                          </div>
                          <h3 class="text-xl font-semibold mb-2">Ágil</h3>
                          <p class="text-gray-600">Metodologías flexibles</p>
                      </div>
                      <div class="tech-card p-6 rounded-xl">
                          <div class="text-teal-500 text-3xl mb-4">
                              <i class="fas fa-handshake"></i>
                          </div>
                          <h3 class="text-xl font-semibold mb-2">1:1</h3>
                          <p class="text-gray-600">Atención personalizada</p>
                      </div>
                  </div>
                </div>
                <div class="relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                             alt="Equipo HIT SOLUTIONS" 
                             class="w-full h-auto rounded-2xl transform hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8 text-white">
                            <p class="text-lg font-medium">Innovación que trasciende</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nuestros Valores -->
        <section class="mb-28">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-4">Nuestros <span class="gradient-text">Valores</span></h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Principios fundamentales que guían nuestra empresa
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8" data-aos="fade-up" data-aos-delay="100">
                <!-- Valor 1 -->
                <div class="tech-card rounded-xl p-8 text-center">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mejora continua</h3>
                    <p class="text-gray-600">
                      Nos comprometemos a escuchar a nuestros usuarios y mejorar constantemente 
                      nuestros productos y servicios para satisfacer sus necesidades.
                </div>
                
                <!-- Valor 2 -->
                <div class="tech-card rounded-xl p-8 text-center">
                    <div class="bg-gradient-to-r from-teal-500 to-teal-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-robot text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Tecnología con Propósito</h3>
                    <p class="text-gray-600">
                      Desarrollamos soluciones que generan un impacto real, mejorando la calidad de vida y la eficiencia de las organizaciones.                    </p>
                </div>
                
                <!-- Valor 3 -->
                <div class="tech-card rounded-xl p-8 text-center">
                    <div class="bg-gradient-to-r from-purple-500 to-purple-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-hands-helping text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Responsabilidad Corporativa</h3>
                    <p class="text-gray-600">
                      Entendemos nuestro papel como empresa y buscamos generar un impacto positivo en las comunidades donde operamos.
                    </p>
                </div>
                
                <!-- Valor 4 -->
                <div class="tech-card rounded-xl p-8 text-center">
                    <div class="bg-gradient-to-r from-indigo-500 to-indigo-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Compromiso</h3>
                    <p class="text-gray-600">
                      Nos comprometemos con el éxito de nuestros clientes y el crecimiento de nuestra empresa, trabajando con pasión y dedicación.
                    </p>
                </div>
            </div>
        </section>
<!-- Tecnologías que usamos -->
<section class="mb-28" data-aos="fade-up">
  <div class="text-center mb-16">
      <h2 class="text-4xl font-bold mb-4">Tecnologías <span class="gradient-text">que Usamos</span></h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Nuestro stack tecnológico para construir el proyectos
      </p>
  </div>
  
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
      <!-- Vue.js -->
      <div class="tech-card p-6 rounded-xl flex flex-col items-center justify-center">
          <img src="https://cdn.worldvectorlogo.com/logos/vue-9.svg" alt="Vue.js" class="h-12 mb-4">
          <span class="font-medium">Vue.js</span>
      </div>
      
      <!-- MongoDB Atlas -->
      <div class="tech-card p-6 rounded-xl flex flex-col items-center justify-center">
          <img src="https://cdn.worldvectorlogo.com/logos/mongodb-icon-1.svg" alt="MongoDB Atlas" class="h-12 mb-4">
          <span class="font-medium">MongoDB Atlas</span>
      </div>
      
      <!-- Arduino -->
      <div class="tech-card p-6 rounded-xl flex flex-col items-center justify-center">
          <img src="https://cdn.worldvectorlogo.com/logos/arduino-1.svg" alt="Arduino" class="h-12 mb-4">
          <span class="font-medium">Arduino</span>
      </div>
      
      <!-- Laravel -->
      <div class="tech-card p-6 rounded-xl flex flex-col items-center justify-center">
          <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="Laravel" class="h-12 mb-4">
          <span class="font-medium">Laravel</span>
      </div>
      
      <!-- React -->
      <div class="tech-card p-6 rounded-xl flex flex-col items-center justify-center">
          <img src="https://cdn.worldvectorlogo.com/logos/react-2.svg" alt="React" class="h-12 mb-4">
          <span class="font-medium">React</span>
      </div>
      
      <!-- Node.js -->
      <div class="tech-card p-6 rounded-xl flex flex-col items-center justify-center">
          <img src="https://cdn.worldvectorlogo.com/logos/nodejs-icon.svg" alt="Node.js" class="h-12 mb-4">
          <span class="font-medium">Node.js</span>
      </div>
  </div>
</section>
        <!-- Estadísticas -->

        <section class="mb-28" data-aos="fade-up">
          <div class="bg-gradient-to-r from-blue-500 to-teal-400 rounded-3xl p-8 md:p-12 text-white">
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                  <div class="text-center">
                      <div class="text-5xl font-bold mb-2" id="projectsCount">0</div>
                      <p class="text-xl">Crecimiento cuatrimestral</p>
                  </div>
                  <div class="text-center">
                      <div class="text-5xl font-bold mb-2" id="satisfactionRate">0</div>
                      <p class="text-xl">Dedicación a cada proyecto</p>
                  </div>
                  <div class="text-center">
                      <div class="text-5xl font-bold mb-2" id="techSolutions">0</div>
                      <p class="text-xl">Resultados medibles</p>
                  </div>
              </div>
          </div>
      </section>

        <!-- Ubicación -->
        <section class="mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-6">Nuestra <span class="gradient-text">Sede</span></h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Nuestro centro de operaciones en la Ciudad de México es donde la magia sucede. Un espacio diseñado para 
                        fomentar la creatividad, la colaboración y la innovación tecnológica.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-blue-500"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Dirección</h3>
                                <p class="text-gray-600">Av. Paseo de la Reforma 505, Cuauhtémoc, 06500 CDMX</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-clock text-blue-500"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Horario</h3>
                                <p class="text-gray-600">Lunes a Viernes: 9:00 am - 6:00 pm</p>
                                <p class="text-gray-600">Sábado y Domingo: Cerrado</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-blue-500"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Contacto</h3>
                                <p class="text-gray-600">+52 55 1234 5678</p>
                                <p class="text-gray-600">visitas@hitsolutions.mx</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div data-aos="fade-left" class="map-container">
                    <!-- Reemplaza con tu embed de Google Maps -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.888244552543!2d-99.1699076845266!3d19.42702074620239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff35f5bd1563%3A0x6c366f0e2de02ff7!2sEl%20%C3%81ngel%20de%20la%20Independencia!5e0!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </section>

        <!-- Equipo Directivo -->
        <section class="mb-28" data-aos="fade-up">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Equipo <span class="gradient-text">Directivo</span></h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Los líderes que guían nuestra visión tecnológica
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="tech-card rounded-xl overflow-hidden">

                    <img src="{{ asset('images/evelynicon.jpg') }}" 
                         alt="CEO" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Evelyn Estrada</h3>
                        <p class="text-blue-500 mb-4">Directora de Diseño y plataformas Web</p>
                        <p class="text-gray-600">
                          Apasionada por el desarrollo de interfaces intuitivas y accesibles para la creación de
                           proyectos.</p>
                    </div>
                </div>
                <div class="tech-card rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="CTO" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Jesús Maravel</h3>
                        <p class="text-blue-500 mb-4">CTO</p>
                        <p class="text-gray-600">
                            Especialista en arquitectura de sistemas e inteligencia artificial. Lidera nuestros equipos técnicos.
                        </p>
                    </div>
                </div>
                
                <div class="tech-card rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1562788869-4ed32648eb72?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="COO" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Jorge Romo</h3>
                        <p class="text-blue-500 mb-4">COO</p>
                        <p class="text-gray-600">
                            Experto en operaciones y escalamiento de empresas tecnológicas. Garantiza nuestra excelencia operativa.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="text-center py-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para transformar tu negocio con tecnología?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                Contáctanos y descubre cómo podemos ayudarte a alcanzar tus objetivos tecnológicos.
            </p>
            <button class="bg-gradient-to-r from-blue-500 to-teal-400 text-white font-semibold py-3 px-8 rounded-full hover:shadow-lg transition-all duration-300">
                Contactar ahora
            </button>
        </section>
    </main>

    <!-- Footer (incluir tu componente aquí) -->
    <script>
        // Animaciones AOS
        AOS.init({
            duration: 800,
            once: true
        });
        
    // Contadores animados con tus valores específicos
    function animateCounters() {
        const projects = { 
            target: 85, 
            element: document.getElementById('projectsCount'),
            prefix: '',
            suffix: '%' 
        };
        
        const satisfaction = { 
            target: 100, 
            element: document.getElementById('satisfactionRate'),
            prefix: '',
            suffix: '%' 
        };
        
        const solutions = { 
            target: 9, 
            element: document.getElementById('techSolutions'),
            prefix: '+',
            suffix: '' 
        };
        
        const duration = 2000; // Duración de la animación en ms
        const interval = 30;   // Intervalo de actualización en ms
        const steps = duration / interval;
        
        const animate = (counter) => {
            let current = 0;
            const increment = counter.target / steps;
            const timer = setInterval(() => {
                current += increment;
                if (current >= counter.target) {
                    clearInterval(timer);
                    current = counter.target;
                }
                counter.element.textContent = counter.prefix + Math.floor(current) + counter.suffix;
            }, interval);
        };
        
        animate(projects);
        animate(satisfaction);
        animate(solutions);
    }

    // Iniciar contadores cuando la sección es visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    observer.observe(document.querySelector('#projectsCount').parentElement.parentElement);
</script>
    @include('components.footer')
  </body>
</html>