<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    // Método para subir la imagen
    public function subirImagen(Request $request)
    {
        // Validar que se haya subido un archivo y que sea una imagen
        $request->validate([
            'archivo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Obtener el archivo subido
        $archivo = $request->file('archivo');

        // Definir la carpeta dentro de tu espacio donde se guardará la imagen
        $rutaCarpeta = '23170082/'; 

        // Subir el archivo a DigitalOcean Spaces (esto lo hace Laravel automáticamente)
        $path = Storage::disk('s3')->put($rutaCarpeta . $archivo->getClientOriginalName(), $archivo);

        // Retornar la respuesta con el path donde se subió la imagen
        return response()->json(['path' => $path], 201);
    }
}
