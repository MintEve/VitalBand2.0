<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos y Gráficas - VitalBand</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        .vital-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }
        .sidebar {
            transition: all 0.3s;
        }
        .table-row-hover:hover {
            background-color: #f1f5f9;
        }
        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body class="flex h-screen bg-gray-50">
    <!-- Barra lateral -->
    <div class="sidebar bg-white w-64 px-4 py-8 shadow-lg flex flex-col">
        <div class="flex items-center justify-center mb-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            <span class="ml-2 text-xl font-bold text-gray-800">VitalBand</span>
        </div>

        <nav class="flex-1">
            <a href="#" class="flex items-center px-4 py-3 text-blue-600 bg-blue-50 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="ml-3 font-medium">Registros</span>
                <!-- Contenido
            </a>
            <a href="{{ url('/grafica') }}" class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="ml-3 font-medium">Estadísticas</span>
            </a>
            <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="ml-3 font-medium">Configuración</span>
            </a>
        </nav>
             -->

        <a href="{{ route('ingresar') }}" class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <span class="ml-3 font-medium">Cerrar sesión</span>
        </a>
    </div>

    <!-- Contenido principal -->
    <div class="flex-1 overflow-auto">
        <!-- Barra superior -->
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-lg font-semibold text-gray-800">Registros y Gráficas de Signos Vitales</h1>
                <div class="flex items-center space-x-4">
                        <!-- Contenido principal 

                    <div class="relative">
                        <input type="text" placeholder="Buscar..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>-->
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-semibold">
                        </div>
                        <span class="ml-2 text-sm font-medium text-gray-700">{{ $nombreUser->nombreCompleto['nombres'][0] }}
                            {{ $nombreUser->nombreCompleto['apellidoPaterno'] }} 
                            {{ $nombreUser->nombreCompleto['apellidoMaterno'] }}</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Contenido -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 space-y-6">
            <!-- Sección de la tabla -->
            @if($registros->isEmpty())
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="mt-2 text-lg font-medium text-gray-900">No hay registros disponibles</h3>
                    <p class="mt-1 text-sm text-gray-500">No se encontraron datos de signos vitales registrados.</p>
                </div>
            @else
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-800">Registros de Signos Vitales</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Fecha
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tipo de Signo Vital
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Máximo
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mínimo
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Promedio
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($registros as $registro)
                                <tr class="table-row-hover">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $registro->fechaDeToma }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $registro->sVital }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            {{ $registro->nivelRegistrado['maximo'] }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $registro->nivelRegistrado['minimo'] }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            {{ $registro->nivelRegistrado['promedio'] }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            <!-- Sección de la gráfica -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Gráfica de Signos Vitales</h2>
                
                <!-- Selector de signo vital -->
                <div class="mb-6">
                    <label for="sVital" class="block text-sm font-medium text-gray-700 mb-2">Selecciona un Signo Vital:</label>
                    <select 
                        id="sVital" 
                        onchange="cargarGrafica()" 
                        class="mt-1 block w-full pl-3 pr-10 py-3 text-base border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-blue-500 sm:text-sm rounded-md shadow-md hover:border-blue-400 transition-all duration-200 cursor-pointer bg-blue font-medium"
                    >
                        <option value="Cardiaca">Frecuencia Cardiaca</option>
                        <option value="Spo2">Oxigenación (SpO2)</option>
                        <option value="Temperatura">Temperatura</option>
                    </select>
                </div>

                <!-- Contenedor de la gráfica -->
                <div class="chart-container">
                    <canvas id="graficaVitales"></canvas>
                </div>

                <!-- Información adicional -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="text-sm font-medium text-blue-800">Último registro</h3>
                        <p class="text-2xl font-semibold text-blue-600" id="ultimoRegistro">--</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="text-sm font-medium text-green-800">Promedio</h3>
                        <p class="text-2xl font-semibold text-green-600" id="promedioRegistro">--</p>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <h3 class="text-sm font-medium text-purple-800">Tendencia</h3>
                        <p class="text-2xl font-semibold text-purple-600" id="tendenciaRegistro">--</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        let chart; // Variable para almacenar la gráfica

        function obtenerUnidad(sVital) {
            const unidades = {
                'Cardiaca': 'lpm',
                'Spo2': '%',
                'Temperatura': '°C'
            };
            return unidades[sVital] || '';
        }

        function calcularTendencia(valores) {
            if (valores.length < 2) return 0;
            const ultimo = valores[valores.length - 1];
            const penultimo = valores[valores.length - 2];
            return ultimo - penultimo;
        }

        async function cargarGrafica() {
            const sVital = document.getElementById('sVital').value;
            const unidad = obtenerUnidad(sVital);

            try {
                const response = await fetch(`/api/registros/${sVital}`);
                const data = await response.json();

                if (data.error) {
                    alert("Error: " + data.error);
                    return;
                }

                if (!data.length) {
                    alert(`No hay datos para ${sVital}`);
                    return;
                }

                const fechas = data.map(registro => registro.fechaDeToma);
                const promedios = data.map(registro => registro.nivelRegistrado.promedio);
                const maximos = data.map(registro => registro.nivelRegistrado.maximo);
                const minimos = data.map(registro => registro.nivelRegistrado.minimo);

                // Actualizar información resumen
                document.getElementById('ultimoRegistro').textContent = 
                    `${promedios[promedios.length - 1]} ${unidad}`;
                document.getElementById('promedioRegistro').textContent = 
                    `${(promedios.reduce((a, b) => a + b, 0) / promedios.length).toFixed(1)} ${unidad}`;
                
                // Calcular tendencia
                const tendencia = calcularTendencia(promedios);
                document.getElementById('tendenciaRegistro').textContent = 
                    tendencia > 0 ? '↑ Subiendo' : tendencia < 0 ? '↓ Bajando' : '→ Estable';

                if (chart) chart.destroy(); // Borra la gráfica anterior

                const ctx = document.getElementById('graficaVitales').getContext('2d');
                chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: fechas,
                        datasets: [
                            {
                                label: `Promedio (${unidad})`,
                                data: promedios,
                                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                borderColor: 'rgba(59, 130, 246, 1)',
                                borderWidth: 2,
                                tension: 0.3,
                                fill: true
                            },
                            {
                                label: `Máximo (${unidad})`,
                                data: maximos,
                                backgroundColor: 'rgba(239, 68, 68, 0.1)',
                                borderColor: 'rgba(239, 68, 68, 1)',
                                borderWidth: 1,
                                borderDash: [5, 5],
                                tension: 0.1
                            },
                            {
                                label: `Mínimo (${unidad})`,
                                data: minimos,
                                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                                borderColor: 'rgba(16, 185, 129, 1)',
                                borderWidth: 1,
                                borderDash: [5, 5],
                                tension: 0.1
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            title: {
                                display: true,
                                text: `Evolución de ${sVital === 'Cardiaca' ? 'Frecuencia Cardiaca' : sVital === 'Spo2' ? 'Oxigenación' : 'Temperatura'}`,
                                font: {
                                    size: 16
                                }
                            },
                            tooltip: {
                                mode: 'index',
                                intersect: false
                            }
                        },
                        scales: {
                            x: { 
                                title: { 
                                    display: true, 
                                    text: 'Fecha',
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            },
                            y: { 
                                title: { 
                                    display: true, 
                                    text: `Valor (${unidad})`,
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }
                        }
                    }
                });

            } catch (error) {
                console.error("Error al obtener los datos:", error);
                alert("Hubo un error al cargar los datos.");
            }
        }

        // Cargar la gráfica inicial al abrir la página
        document.addEventListener('DOMContentLoaded', cargarGrafica);
    </script>
</body>
</html>