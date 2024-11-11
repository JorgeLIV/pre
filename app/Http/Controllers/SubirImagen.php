<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SubirImagen extends Controller
{

public function subirImagen(Request $request)
{
    // Validar que se ha subido un archivo
    $request->validate([
        'archivo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
    ]);

    // Obtener el archivo de la solicitud
    $archivo = $request->file('archivo');

    // Definir la ruta de la carpeta dentro del bucket (puedes personalizarla)
    $rutaCarpeta = '23170082/'; 

    // Subir el archivo a DigitalOcean Spaces
    $path = Storage::disk('s3')->put($rutaCarpeta . $archivo->getClientOriginalName(), $archivo);

    // Retornar la respuesta con el path del archivo subido
    return response()->json(['path' => $path], 201);
}
    //
}
