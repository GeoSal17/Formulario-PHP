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
    <form action="welcome.php" method="post">
    Nombre: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Fecha de nacimiento: <input type="date" name="age"><br>
    Ciudad de nacimiento: <input type="text" name="city"><br>
    <label for="marital-status">Estado civíl:</label>
        <select id="marital-status" name="marital-status">
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
            <option value="divorciado">Divorciado</option>
            <option value="viudo">Viudo</option>
        </select><br>
    <input type="submit">
    </form>
</body>
</html>
