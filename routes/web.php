<?php

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

/**	Rutas del Modulo de Clientes */
Route::get('lista_cl', 'ClientesControl@index');

Route::get('alta_cl', 'ClientesControl@alta_cl');

Route::get('alra_cl', 'ClientesControl@alra_cl');

Route::get('alsb_cl','ClientesControl@alsb_cl');



/** Rutas del Modulo Central de PAP */  
Route::get('/', 'GeneralController@index');

Route::get('c', 'GeneralController@cuerpo');

Route::get('menu', 'GeneralController@menu');

Route::get('blanco', function(){
    return "Esta Pagina esta en Blanco";
});

Route::resource('personal','Tb_personalController');

/* Rutas de Pruebas */

/*
Route::get('/gw', function () {
    return view('welcome');
});

Route::get('/rastreo', function () {
    return view('welcome');
});

/*
Route::get('/clientes', function () {
    //return view('welcome');
	require __DIR__.'/menuC/index.php';
});
*/
/*
Route::get('menu', function () {
    return view('clientes/listaclientes');
});
*/

