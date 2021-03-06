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
//Route::get('lista_cl', 'ClientesControl@index');
//Route::get('alta_cl', 'ClientesControl@alta_cl');

//rhc
Route::resource('lista_cl','Tb_clientesController');

Route::get('alta_cl', 'Tb_clientesController@create');
Route::post('alta_cl/crear', 'Tb_clientesController@store');

//rhc prueba de layout y de charts
Route::get('dash', function(){
    return view('inicio1');
});

//ruta para el ajax de cps traer el edo para generar el ID
Route::get('cp1/{cp}','Ctl_cpsController@getCps');


/****************************************************************************************/

//fasv
Route::get('alra_cl', 'ClientesControl@alra_cl');

Route::get('alsb_cl','ClientesControl@alsb_cl');



/** Rutas del Modulo Central de PAP */  
Route::get('/', 'GeneralController@index');

Route::get('c', 'GeneralController@menu');

//Route::get('menu', 'GeneralController@menu');

Route::get('blanco', function(){
    return "Esta Pagina esta en Blanco";
});


/*  rutas para el control de usuarios */
Route::resource('usu','Tb_personalController');

Route::get('altausu', function(){
    return view('usuario.altausuario');
});





/*  Rutas para el Rastreo y Guia WEB    */  
Route::get('rastreo', function(){
    return view('rastreo.rastreo');
});




/**		Rutas para Guias **/

Route::resource('listguia', 'Tb_serviciosController');


Route::get('alta_guia', function(){
    return view('guias.altaguia');
});

Route::get('busca', function(){
    return view('guias.busca');
});

Route::get('consguia',function(){
    return view('guias.consultaguia');
});

Route::get('hist', function(){
    return view('guias.consultahistorico');
});



/*  Estas Rutas se ocupan para el track     */
Route::resource('track','Tb_TrackController');





/* Rutas para Administrar Catalogos */

Route::get('ctlcp', function(){
    return view('catalogos.cat_cp');
});

Route::resource('ctlest', 'Ctl_estatusController');



