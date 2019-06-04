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

/**
 * Ejemplo de QR simple
 */
Route::get('qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});

/**
 * Ejemplo de QR con colores
 */
Route::get('qrcode-with-color', function () {
    return \QrCode::size(300)
                    ->backgroundColor(255,55,0)
                    ->generate('A simple example of QR code');
});

/**
 * Insertando una imagen al QR
 */
Route::get('qrcode-with-image', function () {
    $image = \QrCode::format('png')
                    ->merge('images/axeltux.png', 0.5, true)
                    ->size(500)->errorCorrection('H')
                    ->generate('Un simple ejemplo de QR con imagenes!');
 return response($image)->header('Content-type','image/png');
});

/**
 * Prueba de envio de correo con QR
 */
Route::get('qrcode-with-special-data', function() {
    return \QrCode::size(500)
                ->email('axeltux@gmail.com', 'Prueba de QR', 'Esta es una prueba.');
});
