<?php

use App\Http\Controllers\controllerProductos;
use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('producto/{id}' , [controllerProductos::class , 'obtenerProductos']);

Route::post('producto',[controllerProductos::class, 'crearProductos']);

Route::put('producto/{id}',[controllerProductos::class, 'modificarProductos']);

Route::delete('producto/{id}',[controllerProductos::class, 'eliminarProductos']);