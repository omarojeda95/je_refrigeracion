<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServicesImagesController;

Route::get('/', function () {
    return view('index');
});
Route::get('/nosotros', function () {
    return view('about');
});
Route::get('/contacto', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/', [ServicesController::class, 'main']);
Route::get('servicios', [ServicesController::class, 'index']);
Route::get('servicios/{name}', [ServicesController::class, 'name_service']);
Route::post('/enviar_correo', [ServicesController::class, 'send_mail']);
Route::post('/post_login', [AuthController::class, 'post_login']);
Route::group(['middleware' => 'usersession'], function () {
    Route::get('/dashboard', [ServicesController::class, 'dashboard']);
    Route::post('/get_dash_servicio', [ServicesController::class, 'service_id']);
    Route::post('/subir_imagenes', [ServicesImagesController::class, 'store']);
});
