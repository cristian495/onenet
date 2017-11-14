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

/** PAGINA WEB **/

Route::get('/', function () {
    return view('webPage.welcome');
});

Route::get('/nosotros',function(){
    return view('webPage.nosotros');
});

Route::get('/servicios/internet_inalambrico',function(){
    return view('webPage.servicios.internet');
});

    Route::get('/servicios/internet_inalambrico/hogares',function(){
        return view('webPage.servicios.para_quienes.hogares');
    });

    Route::get('/servicios/internet_inalambrico/pymes',function(){
        return view('webPage.servicios.para_quienes.pymes');
    });

    Route::get('/servicios/internet_inalambrico/internet_dedicado',function(){
        return view('webPage.servicios.para_quienes.instituciones');
    });

    Route::get('/servicios/cobertura',function(){
        return view('webPage.servicios.cobertura');
    });

Route::get('/contactenos',function(){
    return view('webPage.contactenos');
});















Route::get('/login', function () {
    return redirect('login');
});

/*
 * AUTENTIFICACION
 * */
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*
 **** ANTENA EMISORA
  */
Route::get('/equipos/antena_emisora','AntenaEmisoraController@index');
Route::get('/listado_antenas', 'AntenaEmisoraController@getTasks')->name('datatables.antenas');
Route::get('/equipos/form_nueva_antena','AntenaEmisoraController@create');
Route::post('equipos/crear_antena_emisora','AntenaEmisoraController@store');
Route::get('/equipos/detalles_antena_emisora/{id}','AntenaEmisoraController@show');
Route::get('/equipos/editar_antena_emisora/{id}','AntenaEmisoraController@edit');
Route::post('/equipos/editar_antena_emisora','AntenaEmisoraController@update');
Route::get('/equipos/form_modal_delete_antena/{idcon}','AntenaEmisoraController@delete');
Route::get('/equipos/eliminar_antena/{idcon}','AntenaEmisoraController@destroy');


/*
 **** PAQUETES
  */
Route::get('/paquetes','PaqueteController@index');
Route::post('/listado_paquetes', 'PaqueteController@getPaquetes')->name('datatables.paquetes');
Route::get('/form_nuevo_paquete','PaqueteController@create');
Route::post('crear_paquete','PaqueteController@store');
Route::get('/detalles_paquete/{idpaq}','PaqueteController@show');
Route::get('/form_editar_paquete/{id}','PaqueteController@edit');
Route::post('/editar_paquete','PaqueteController@update');
Route::get('/eliminar_paquete/{idpaq}','PaqueteController@destroy');
Route::get('/paquetes/form_modal_delete_paquete/{idcon}','PaqueteController@delete');
Route::get('/paquetes/eliminar_paquete/{idcon}','PaqueteController@destroy');



/*
 **** CLIENTES
  */
Route::get('/clientes','ClienteController@index');
Route::get('/listado_clientes', 'ClienteController@getClientes')->name('datatables.clientes');
Route::get('/form_nuevo_cliente','ClienteController@create');
Route::post('crear_cliente','ClienteController@store');
Route::get('/detalles_cliente/{idcli}','ClienteController@show');
Route::get('/form_editar_cliente/{idcli}','ClienteController@edit');
Route::post('/editar_cliente','ClienteController@update');
Route::get('/clientes/form_modal_delete_cliente/{idcon}','ClienteController@delete');
Route::get('/clientes/eliminar_cliente/{idcon}','ClienteController@destroy');


/*
 **** BUSQUEDAS CON AJAX
 */
Route::get('/servicio/search_cliente/{idcli}','ClienteController@search_cliente');
Route::get('/servicio/search_paquete/{idpaq}','PaqueteController@search_paquete');
Route::get('/servicio/search_antena/{idant}','AntenaEmisoraController@search_antena');
Route::get('/servicio/search_cli_contrato/{idcli}','ContratoController@search_cli_contrato');
Route::get('/servicio/search_men_cliente/{idcli}/{idcont}','PendientesController@search_men_cliente');


/*
 **** CONTRATOS
  */
Route::get('/servicio/contratos','ContratoController@index');
Route::post('/servicio/listado_contratos', 'ContratoController@getContratos')->name('datatables.contratos');
Route::get('/servicio/form_nuevo_contrato','ContratoController@create');



Route::post('/servicio/crear_contrato','ContratoController@store');
Route::get('/servicio/detalles_contrato/{idcon}','ContratoController@show');
Route::get('/servicio/form_editar_contrato/{idcon}','ContratoController@edit');
Route::post('/servicio/editar_contrato','ContratoController@update');
Route::get('/servicio/form_modal_delete/{idcon}','ContratoController@delete');
Route::get('/servicio/eliminar_contrato/{idcon}','ContratoController@destroy');
Route::get('/servicio/pdf_contrato','ContratoController@generar_pdf');


/*
 ***  POR COBRAR
 */

Route::get('/servicio/cobros/por_cobrar/','PendientesController@index');
Route::post('/servicio/cobros/listado_porCobrar', 'PendientesController@getPorCobrar')->name('datatables.cobros');


/*
 *** COMPROBANTES
 */
Route::get('servicio/cobros/comprobantes','ComprobantesController@index');
Route::post('/servicio/cobros/listado_comprobantes', 'ComprobantesController@getComprobantes')->name('datatables.comprobantes');
Route::get('servicio/cobros/form_nuevo_comprobante','ComprobantesController@create');
Route::post('servicio/cobros/crear_comprobante','ComprobantesController@store');
Route::get('/servicio/cobros/detalles_comprobante/{idcom}','ComprobantesController@show');


/*
 *** USUARIOS ADMINISTRADORES
 */
Route::get('acceso/usuarios/administradores','AdminsController@index');
Route::post('acceso/usuarios/listado_usuarios_adminis', 'AdminsController@getUsuarios')->name('datatables.usuarios_admin');
Route::get('acceso/usuarios/form_nuevo_admin','AdminsController@create');
Route::post('acceso/usuarios/crear_user_admin','AdminsController@store');
Route::get('acceso/usuarios/form_editar_admin/{idus}','AdminsController@edit');
Route::post('acceso/usuarios/editar_user_admin','AdminsController@update');
Route::get('/acceso/usuarios/form_modal_delete_admin/{idus}','AdminsController@delete');
Route::get('acceso/usuarios/eliminar_useradmin/{idus}','AdminsController@destroy');



/*
 *** USUARIOS CLIENTE
 */
Route::get('acceso/usuarios/clientes','UsuarioController@index');
Route::post('acceso/usuarios/listado_usuarios_clientes', 'UsuarioController@getUsuarios')->name('datatables.usuarios_cliente');
//Route::get('acceso/usuarios/form_nuevo_admin','AdminsController@create');
//Route::post('acceso/usuarios/crear_user_admin','AdminsController@store');
Route::get('acceso/usuarios/form_editar_client/{idus}','UsuarioController@edit');
Route::post('acceso/usuarios/editar_user_client','UsuarioController@update');
Route::get('/acceso/usuarios/form_modal_delete_client/{idus}','UsuarioController@delete');
Route::get('acceso/usuarios/eliminar_userclient/{idus}','UsuarioController@destroy');




/*
 *** MIS PAGOS DEL CLIENTE
 */

Route::get('consultas/pagoshechos','MisPagosController@index');
Route::post('consultas/pagos_hechos/listado_pagos_hechos', 'MisPagosController@getPagosHechos')->name('datatables.pagos_hechos');
Route::get('consultas/mostrar_detalle_pago/{idpag}','MisPagosController@show');

/*
 *** MENSUALIDADES DEL CLIENTE
 */

Route::get('consultas/mensualidades','MisMensualidadesController@index');
Route::post('consultas/mensualidades/listado_mensualidades', 'MisMensualidadesController@getmensualidades')->name('datatables.mensualidades');


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
