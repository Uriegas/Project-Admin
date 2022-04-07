<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------d--------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/presupuesto', function () {
    return view('Finanzas/presupuesto');
});

Route::get('/dashboard', function () {
    return view('Finanzas/dashboardFinanzas');
});

Route::get('/reporte', function () {
    return view('Finanzas/reporte');
});

Route::get('/cotizacion', function () {
    return view('Finanzas/cotizacion');
});

Route::get('/visualizar', function () {
    return view('Finanzas/visualizar_proyecto');
});

