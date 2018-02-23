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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/usuariosA', function () {
    return view('usuariosA');
});
*/

//ruta hacia controlador muestra todos los registros
Route::resource('personal','Tb_personalController');

//ruta hacia el controlador que enviara a la alta del proceso de ingresar datos
Route::get('personalc', 'Tb_personalController@create');

//ruta post hacia el controler para guardar los datos capturados con el ruteo anterio
Route::post('personal/crear', 'Tb_personalController@store');

