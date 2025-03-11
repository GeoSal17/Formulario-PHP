<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            max-width: 500px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .info {
            font-size: 18px;
            margin-top: 10px;
        }
        .highlight {
            font-weight: bold;
            color: #0275d8;
        }
        .btn {
            background: #0275d8;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background: #025aa5;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nombre1 = $_GET["nombre1"] ?? "Usuario 1";
        $nombre2 = $_GET["nombre2"] ?? "Usuario 2";
        $edad = $_GET["edad"] ?? 0;
        $ciudad = $_GET["ciudad"] ?? "Desconocida";

        // Condición: si la edad es 18 o más, muestra nombre1, si no, muestra nombre2
        $nombreMostrar = ($edad >= 18) ? $nombre1 : $nombre2;

        echo "<h1>¡Bienvenido, <span class='highlight'>$nombreMostrar</span>!</h1>";
        echo "<p class='info'>Edad: <span class='highlight'>$edad</span></p>";
        echo "<p class='info'>Ciudad: <span class='highlight'>$ciudad</span></p>";
    } else {
        echo "<p>Acceso no válido.</p>";
    }
    ?>
    <button class="btn" onclick="window.print()">Imprimir página</button>
</div>

</body>
</html>
