<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

/* Route::group(['middleware' => ['auth']], function (){ */
    Route::get('/users',[UserController::class,'index']);

    Route::resource('administracion', AdministracionController::class);

    Route::resource('desarrollo', DesarrolloController::class);

    Route::resource('finanzas', FinanzasController::class);

    Route::resource('mrk-ventas', MarkVenController::class);

    Route::resource('recursos-humanos', RHController::class);
   /* }); */

    // Rutas Marketing y ventas

    Route::get('/mrk-ventas/estrategias_publicidad/dashboard', function() {
        return view('mrk-ventas/estrategias_publicidad/dashboard');
    });

    Route::get('/mrk-ventas/clientes/dashboard', function() {
        return view('mrk-ventas/clientes/dashboard');
    });

    Route::get('/mrk-ventas/clientes/visualizar_clientes', function() {
        return view('mrk-ventas/clientes/visualizar_clientes');
    });



/* Auth::routes(); */

Auth::routes();
