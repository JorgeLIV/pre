<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Mail\Email;

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
use App\Http\Controllers\ImagenController;

Route::get('/ver-imagen/{nombreImagen}', function ($nombreImagen) {
    // La URL base de tu DigitalOcean Space
    $urlBase = env('AWS_URL');  // Esto obtiene la URL configurada en el archivo .env

    // Concatenamos la ruta de la imagen con el nombre de la imagen
    $urlImagen = $urlBase . '/' . $nombreImagen;

    // Retornamos la URL de la imagen
    return redirect()->to($urlImagen);
});

// Ruta para mostrar el formulario
Route::get('/subir-imagen', function () {
    return view('subir-imagen');
});

// Ruta para manejar el formulario y subir la imagen
Route::post('/subir-imagen', [ImagenController::class, 'subirImagen']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/activate', function() {
    Mail::to('jorgeibarravilla3@gmail.com')
        ->send(new Email());
    return 'Email was sent';
})->name('activate');


