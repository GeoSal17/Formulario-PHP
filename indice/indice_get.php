<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
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
    <h1>Formulario de envío (GET)</h1>
    <form action="./bienvenida/bienvenida_get.php" method="get">
        <label for="nombre">Nombre(s):</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" id="apellido" name="apellido" required>
        <br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad">
        <br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>
        <br><br>

        <label for="marital-status">Estado civíl:</label>
            <select id="marital-status" name="marital-status">
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
                <option value="divorciado">Divorciado</option>
                <option value="viudo">Viudo</option>
            </select>
        <br><br>

        <label for="birthday">Fecha de nacimiento:</label>
        <input type="date" id="birthday" name="birthday" required>
        <br><br>
    <input type="submit" value="Enviar" class="btn">
    </form>
</body>
</html>
