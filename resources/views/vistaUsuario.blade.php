<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('navbar') <!-- Incluye la barra de navegación -->
    <h1>Bienvenido {{ $nombreUser->nombreCompleto['nombres'][0] }}
     {{ $nombreUser->nombreCompleto['apellidoPaterno'] }} 
     {{ $nombreUser->nombreCompleto['apellidoMaterno'] }}</h1> {{-- mandar datos como arreglo de objetos --}}


     @if($registros->isEmpty())
     <p>No hay registros disponibles.</p>
 @else
     <table border="1">
         <thead>
             <tr>
                 <th>Fecha</th>
                 <th>Tipo de Signo Vital</th>
                 <th>Máximo</th>
                 <th>Mínimo</th>
                 <th>Promedio</th>
             </tr>
         </thead>
         <tbody>
             @foreach($registros as $registro)
             <tr>
                 <td>{{ $registro->fechaDeToma }}</td>
                 <td>{{ $registro->sVital }}</td>
                 <td>{{ $registro->nivelRegistrado['maximo'] }}</td>
                 <td>{{ $registro->nivelRegistrado['minimo'] }}</td>
                 <td>{{ $registro->nivelRegistrado['promedio'] }}</td>
             </tr>
             @endforeach
         </tbody>
     </table>
 @endif

 <a href="{{ url('/grafica') }}">
    <button style="padding: 10px; background: blue; color: white; border-radius: 5px; border: none; cursor: pointer;">
        Ver Gráfica de Signos Vitales
    </button>
</a>



</body>
</html>

