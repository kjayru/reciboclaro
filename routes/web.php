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
Route::get('/','LandingController@show');
Route::get('/como-leer-tu-recibo-movil','ConoceController@index');
Route::get('/como-leer-tu-recibo-movil/{slug}','ConoceController@show');

Route::get('/debito-automatico-concurso','ConoceController@debito');
Route::get('/que-te-paso-este-mes','QuetepasoController@index');
Route::get('/que-te-paso-este-mes/{slug}', 'QuetepasoController@show');

Route::get('/simulador-de-facturacion','SimuladorController@index');
Route::get('/lugares-de-pago','LugaresController@index');
Route::get('/glosario-de-facturacion','GlosarioController@index');

Route::get('/glosario-de-facturacion/{slug}','GlosarioController@show');
Route::get('/que-es-el-recibo-por-email','ReciboEmailController@index');
Route::get('/dudas-y-preguntas-frecuentes','PreguntasController@index');

Route::get('/lugares-de-pago-empresas-scotiabank','LugaresController@empresas');
Route::get('/lugares-de-pago-empresas-bcp','LugaresController@statibcp');

Route::get('/lugares-de-pago-empresas-debito-automatico-scotiabank','LugaresController@empresasdebitoscotiabank');
Route::get('/lugares-de-pago-empresas-debito-automatico-bcp','LugaresController@empresasdebitobcp');

Route::get('/lugares-de-pago-empresas/debito-automatico','LugaresController@debitoempresa');
Route::get('/lugares-de-pago-empresas','LugaresController@lugaresempresas');
Route::get('/lugares-de-pago-empresas/banca-digital','LugaresController@digitalempresa');

Route::get('/lugares-de-pago/debito-automatico-test-ruta','LugaresController@debitonew');

Route::get('/lugares-de-pago/debito-automatico','LugaresController@debito');
Route::get('/lugares-de-pago/banco-digital','LugaresController@digital');

Route::get('/lugares-de-pago/Pagos-digitales/{slug}','LugaresController@show');
Route::get('/lugares-de-pago/Pagos-digitales/','LugaresController@index');
Route::get('/lugares-de-pago/{slug}','LugaresController@bancos');

Route::get('/dudas-sobre-tu-facturacion','HomeController@index');
Route::get('/dudas-sobre-tu-facturacion/{cat}','HomeController@enlaces');
Route::get('/dudas-sobre-tu-facturacion/{cat}/{subcat}','HomeController@subenlaces');

//Route::get('/dudas-sobre-tu-facturacion/{cat?}/{subcat?}/{subsubcat?}/{ssubsubcat?}/{sssubsubcat?}/{ssssubsubcat?}','PageLoaderController@index', function ($cat,$subcat,$subcat1,$subcat2,$subcat3,$subcat4){});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
