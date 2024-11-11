<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activación de Cuenta</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 40px;
            width: 400px;
            text-align: center;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .container:hover {
            transform: scale(1.05);
        }
        h1 {
            color: #00796b;
            font-size: 28px;
            margin-bottom: 10px;
        }
        h2 {
            color: #00796b;
            font-size: 18px;
            margin-bottom: 25px;
        }
        .button {
            display: inline-block;
            background-color: #00796b;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .button:hover {
            background-color: #004d40;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }
        .button:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido a la Plataforma!</h1>
        <h2>Para activar tu cuenta, haz clic en el siguiente enlace:</h2>
        <a href="#" class="button">Activar Cuenta</a>
    </div>
</body>
</html>
