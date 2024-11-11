<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Mail\Email;
use App\Jobs\EnviarCorreoBienvenida;
use App\Models\User;
use Carbon\Carbon;

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


Route::get('/activate', function () {
    // Aquí debes proporcionar los datos del usuario (esto es solo un ejemplo)
    // Deberías crear un usuario o pasar uno que ya exista
    $usuario = User::find(1); // Asegúrate de tener un usuario válido

    // Despachar el job para enviar el correo con un retraso de 3 minutos
    EnviarCorreoBienvenida::dispatch($usuario)
        ->delay(Carbon::now()->addMinutes(3)); // Retrasar el envío del correo 3 minutos

    return 'El correo será enviado en 3 minutos';
})->name('activate');