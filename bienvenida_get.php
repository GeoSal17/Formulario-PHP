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
    <h1>¡Bienvenido, <span class='highlight'><?php echo $_GET["nombre"]; echo $_GET["apellido"];?></span>!<br>
    <p class='info'>Edad: <span class='highlight'><?php echo $_GET["edad"];?>/span></p>
    <p class='info'>Sexo: <span class='highlight'><?php echo $_GET["sexo"];?></span></p>
    <p class='info'>Estado civil: <span class='highlight'><?php echo $_GET["marital-status"];?></span></p>
    <p class='info'>Fecha de nacimiento: <span class='highlight'><?php echo $_GET["birthday"];?></span></p>
    
    <button class="btn" onclick="window.print()">Imprimir página</button>
</div>

</body>
</html>
