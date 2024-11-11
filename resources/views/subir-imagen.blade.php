<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
</head>
<body>

    <h1>Subir Imagen</h1>

    <!-- Formulario de subida de imagen -->
    <form action="{{ url('/subir-imagen') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="archivo">Selecciona una imagen:</label>
        <input type="file" name="archivo" id="archivo" required>
        <button type="submit">Subir Imagen</button>
    </form>

</body>
</html>
