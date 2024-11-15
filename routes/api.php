<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ArchivoController;
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
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SubirImagen;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/subir-imagen', [SubirImagen::class, 'subirImagen']);
//protejo individual
//Route::get('users', [UserController::class, 'index'])->middleware('jwt.verify');

use App\Http\Controllers\CorreoController;


//protejo grupo
Route::middleware('jwt.verify')->group(function(){
    Route::get('users', [UserController::class, 'index']);


});
