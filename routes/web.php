<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contacto/{codigo?}', function ($codigo = null) {
    if ($codigo==123){
        $nombre = "kevin";
        $correo = "kevin@gmail.com";
    }
    else{
        $nombre = "";
        $correo = "";
        }
    return view('contacto', compact('nombre', 'correo'));
});
