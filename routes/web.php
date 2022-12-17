<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

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
    return view('index');
});
Route::get('/nosotros', function () {
    return view('about');
});
Route::get('/contacto', function () {
    return view('contact');
});

Route::get('servicios', [ServicesController::class, 'index']);
Route::get('servicios/{name}', [ServicesController::class, 'name_service']);
