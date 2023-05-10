<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/inventario', function () {
//    return view('inventario.index');
//});

//Route::get('/inventario/create',[InventarioController::class, 'create']);

Route::resource('inventario',InventarioController::class);



