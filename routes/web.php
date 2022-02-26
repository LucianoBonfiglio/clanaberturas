<?php
use App\Http\Controllers\contactoController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/modificar', function () {
    return view('modificar');
});

Route::get('/eliminar', function () {
    return view('eliminar');
});

Route::get('auth/register', function () {
    return view('auth/register');
});

Route::get('/consultar', function () {
    return view('consultar');
});

Route::get('/agregar', function () {
    return view('agregar');
});

Route::get('/compra', function () {
    return view('compra');
});

Route::get('/venta', function () {
    return view('venta');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/producto', function () {
    return view('producto');
});

Route::get('/categoria', function () {
    return view('categoria');
});

Route::get('/listado/listadocategoria', function () {
    return view('listado/listadocategoria');
});

Route::post('agregarcompra', "CompraController@agregar");
Route::get('compra', "CompraController@create");
Route::get('listado/listadocompra', "CompraController@listado");
Route::post('listado/listadocompra', "CompraController@editar");
Route::post('eliminarcompra', "CompraController@delete");
Route::get('modificar/modcompra{id}', "CompraController@modificar");

Route::post('agregarcategoria', "CategoriaController@agregar");
Route::get('listado/listadocategoria', "CategoriaController@listado");
Route::post('listado/listadocategoria', "CategoriaController@editar");
Route::post('eliminarcategoria', "CategoriaController@delete");
Route::get('modificar/modcategoria{id}', "CategoriaController@modificar");

Route::post('agregarcliente', "ClienteController@agregar");
Route::get('listado/listadocliente', "ClienteController@listado");
Route::post('listado/listadocliente', "ClienteController@editar");
Route::post('eliminarcliente', "ClienteController@delete");
Route::get('modificar/modcliente{id}', "ClienteController@modificar");

Route::post('agregarproducto', "ProductoController@agregar");
Route::get('producto', "ProductoController@create");
Route::get('listado/listadoproducto', "ProductoController@listado");
Route::post('listado/listadoproducto', "ProductoController@editar");
Route::post('eliminarproducto', "ProductoController@delete");
Route::get('modificar/modproducto{id}', "ProductoController@modificar");

Route::post('agregarventa', "VentaController@agregar");
Route::get('venta', "VentaController@create");
Route::get('listado/listadoventa', "VentaController@listado");
Route::post('listado/listadoventa', "VentaController@editar");
Route::post('eliminarventa', "VentaController@delete");
Route::get('modificar/modventa{id}', "VentaController@modificar");