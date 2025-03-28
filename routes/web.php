<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');


Route::get('/descargar', function () {
    return view('descargar');
})->name('descargar');


Route::get('/ingresar', function () {
    return view('ingresar');
})->name('ingresar');



Route::get('/usuario', function () {
    return view('vistaUsuario');
})->name('usuario');


Route::get('/grafica', function () {
    return view('grafica');
})->name('grafica');


Route::get('/mensaje', function () {
    
});


// esta guarda los datos en la sesion global de laravel
Route::post('/set-parameters', function (Request $request) {
    // Guardar los parámetros en la sesión
    session(['param1' => $request->param1, 'param2' => $request->param2]);
    return response()->json(['success' => true]);
});


Route::get('/usuarios', function () {
    // Obtener los datos de la colección "usuarios"
    $usuarios = DB::connection('mongodb')->table('usuarios')->get();

    // Recuperar los parámetros guardados en la sesión
    $param1 = session('param1'); // Nombre de usuario
    $param2 = session('param2'); // Contraseña

    // Buscar el usuario con el nombre de usuario proporcionado
    $usuarioEncontrado = $usuarios->firstWhere('nameUser', $param1);
    

   // var_dump( $usuarioEncontrado->nombreCompleto['apellidoPaterno']);

    // Verificar si el usuario existe y si la contraseña es correcta


     //if ($usuarioEncontrado && $usuarioEncontrado->contrasena === $param2) {
        // Redirigir a la vista con el nombre de usuario
      //  return view('vistaUsuario', ['nombreUser' => $usuarioEncontrado]);

        if ($usuarioEncontrado && $usuarioEncontrado->contrasena === $param2) {
            // Obtener los registros del usuario autenticado
            $registros = DB::connection('mongodb')->table('registros')
                ->where('userName', $param1) // Filtrar por el usuario autenticado
                ->orderBy('fechaDeToma', 'desc') // Ordenar por fecha
                ->get();
    
            // Enviar usuario y registros a la vista
            return view('vistaUsuario', [
                'nombreUser' => $usuarioEncontrado,
                'registros' => $registros
            ]);

        } else {
            // Redirigir a otra página si los datos son incorrectos
            //eturn 'Usuario no encontrados';
            return redirect()->back()->with('error', 'Esta cuenta no existe.');
        } 
});


/* Route::get('/api/registros/{sVital}', function ($sVital) {
    $param1 = session('param1'); // Usuario autenticado

    $signosValidos = ['Spo2', 'Cardiaca', 'Temperatura']; 
    if (!in_array($sVital, $signosValidos)) {
        return response()->json(["error" => "Signo vital no válido"], 400);
    }

    //API PARA MANDAR INFORMACIÓN A LA TABLA EN VISTA USUARIOS
    $registros = DB::connection('mongodb')->table('registros')
        ->where('userName', $param1)
        ->where('sVital', $sVital)
        ->orderBy('fechaDeToma', 'asc')
        ->get()
        ->map(function ($item) {
            return [
                'fechaDeToma' => $item->fechaDeToma,
                'sVital' => $item->sVital,
                'nivelRegistrado' => [
                    'promedio' => $item->nivelRegistrado['promedio'],
                    'maximo' => $item->nivelRegistrado['maximo'],
                    'minimo' => $item->nivelRegistrado['minimo']
                ]
            ];
        });

    return response()->json($registros);
});  */


Route::get('/api/registros/{sVital}', function ($sVital) {
    $param1 = session('param1');

    try {
        $query = DB::connection('mongodb')->table('registros')
            ->where('userName', $param1)
            ->where('sVital', $sVital)
            ->orderBy('fechaDeToma', 'desc');


        if (request()->has('all') && request()->get('all') == 'true') {
            $registros = $query->get();
        } else {
            $page = request()->get('page', 1);
            $perPage = 5;
            $total = $query->count();
            $registros = $query->skip(($page - 1) * $perPage)->take($perPage)->get();
        }

        $mappedData = $registros->map(function ($item) {
            return [
                'fechaDeToma' => $item->fechaDeToma,
                'sVital' => $item->sVital,
                'nivelRegistrado' => [
                    'promedio' => $item->nivelRegistrado['promedio'],
                    'maximo' => $item->nivelRegistrado['maximo'],
                    'minimo' => $item->nivelRegistrado['minimo']
                ]
            ];
        });

        $response = [
            'success' => true,
            'data' => $mappedData
        ];

        if (!request()->has('all')) {
            $response['total'] = $total;
            $response['current_page'] = (int)$page;
            $response['per_page'] = $perPage;
            $response['last_page'] = ceil($total / $perPage);
        }

        return response()->json($response);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error' => 'Error al obtener los datos: ' . $e->getMessage()
        ], 500);
    }
});