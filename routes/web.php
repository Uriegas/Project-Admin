<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\DesarrolloController;
use App\Http\Controllers\FinanzasController;
use App\Http\Controllers\MarkVenController;
use App\Http\Controllers\RHController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/recursos-humanos/empleados', function () {
    return view('recursos-humanos/empleados.index');
})->name('Lista Empleados');
Route::get('/recursos-humanos/evaluaciones', function () {
    return view('recursos-humanos.evaluaciones');
})->name('Lista Evaluaciones');

/* Route::group(['middleware' => ['auth']], function (){ */

    Route::resource('administracion', AdministracionController::class);

    Route::resource('desarrollo', DesarrolloController::class);

    Route::resource('finanzas', FinanzasController::class);

    Route::resource('mrk-ventas', MarkVenController::class);

    Route::resource('recursos-humanos', RHController::class);
   /* }); */

    //Route::get('recursos-humanos/empleados', [EmpleadoController::class,'index']);

    /* }); */
    /*rutas recursos humanos*/
    Route::get('recursos-humanos/empleados',[RHController::class, 'Listaempleados']);
    Route::post('recursos-humanos/empleados',[App\Http\Controllers\RHController::class,'storeempleado']);
    Route::get('recursos-humanos/empleados/create',[RHController::class, 'nuevoempleado']);
    Route::get('recursos-humanos/empleados/{id}/edit',[RHController::class, 'editarempleado']);
    Route::patch('recursos-humanos/empleados/{id}',[RHController::class, 'updateempleado']);
    Route::delete('recursos-humanos/empleados/delete/{id}', [App\Http\Controllers\RHController::class, 'destroyempleado']);
    Route::get('recursos-humanos/empleados/pdf/{id}',[RHController::class, 'pdf']);
    Route::get('recursos-humanos/evaluaciones', [App\Http\Controllers\RHController::class, 'Listaevaluacion']);
    Route::get('recursos-humanos/evaluaciones/{id}/create',[RHController::class, 'createevaluacion']);
    Route::post('recursos-humanos/evaluaciones',[App\Http\Controllers\RHController::class,'storeevaluacion']);
    Route::delete('recursos-humanos/evaluaciones/delete/{id}', [App\Http\Controllers\RHController::class, 'destroyevaluacion']);

    //**************************************** */

    // Rutas Marketing y ventas

    Route::get('/mrk-ventas/estrategias_publicidad/dashboard', function() {
        return view('mrk-ventas/estrategias_publicidad/dashboard');
    });

    Route::get('/mrk-ventas/estrategias_publicidad/visualizar_estrategia', function() {
        return view('mrk-ventas/estrategias_publicidad/visualizar_estrategia');
    });

    Route::get('/mrk-ventas/clientes/dashboard', function() {
        return view('mrk-ventas/clientes/dashboard');
    });

    Route::get('/mrk-ventas/clientes/visualizar_clientes', function() {
        return view('mrk-ventas/clientes/visualizar_clientes');
    });

    //

    //**************************************** */

    // Rutas Finanzas

    Route::get('/presupuesto', function () {
        return view('finanzas/presupuesto');
    });

    Route::get('/reporte', function () {
        return view('finanzas/reporte');
    });
    
    Route::get('/cotizacion', function () {
        return view('finanzas/cotizacion');
    });
    
    Route::get('/visualizar', function () {
        return view('finanzas/visualizar_proyecto');
    });

    //**************************************** */



/* Auth::routes(); */

Auth::routes();
