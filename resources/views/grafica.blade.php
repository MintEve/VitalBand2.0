<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica de Signos Vitales</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            text-align: center;
        }
        canvas {
            max-width: 100%;
            height: 300px !important;
        }
        select {
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    @include('components/navbar') <!-- Incluye la barra de navegación -->

    <div class="container">
        <h2>Gráfica de Signos Vitales</h2>
        
        <!-- Selector de signo vital -->
        <label for="sVital">Selecciona un Signo Vital:</label>
        <select id="sVital" onchange="cargarGrafica()">
            <option value="Cardiaca">Frecuencia Cardiaca</option>
            <option value="Spo2">Oxigenación (SpO2)</option>
            <option value="Temperatura">Temperatura</option>
        </select>

        <canvas id="graficaVitales"></canvas> <!-- Aquí se renderiza la gráfica -->
    </div>

    <script>
        let chart; // Variable para almacenar la gráfica


        async function cargarGrafica() {
    const sVital = document.getElementById('sVital').value;

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
        const valores = data.map(registro => registro.nivelRegistrado.promedio);

        if (chart) chart.destroy(); // Borra la gráfica anterior

        // Selección del tipo de gráfico
        let tipoGrafico = 'line';
        if (sVital === 'Temperatura') tipoGrafico = 'bar';
        if (sVital === 'Spo2') tipoGrafico = 'line'; // También puedes probar 'area'

        const ctx = document.getElementById('graficaVitales').getContext('2d');
        chart = new Chart(ctx, {
            type: tipoGrafico,
            data: {
                labels: fechas,
                datasets: [{
                    label: `Nivel Promedio - ${sVital}`,
                    data: valores,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    fill: sVital === 'Spo2' // Relleno solo para oxigenación
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: { title: { display: true, text: 'Fecha' }},
                    y: { title: { display: true, text: 'Nivel Promedio' }}
                }
            }
        });

    } catch (error) {
        console.error("Error al obtener los datos:", error);
        alert("Hubo un error al cargar los datos.");
    }
}


        // Cargar la gráfica inicial con el primer valor del selector
        cargarGrafica();
    </script>


<a href="{{ url('/usuario') }}">
    <button style="padding: 10px; background: blue; color: white; border-radius: 5px; border: none; cursor: pointer;">
        Ver Gráfica de Signos Vitales
    </button>
</a>

</body>
</html>
