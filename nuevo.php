<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login App</title>
    <style>
        body {
            font-family: Arial;
            background: #0c09e0ff;
        }
        .container {
            width: 350px;
            background: white;
            padding: 20px;
            margin: 100px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .titulo {
            text-align: center;
            margin-bottom: 20px;
            color: #03810aff;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="titulo">Iniciar Sesión</h2>

    <form action="login.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>

    <a href="registro.php">Crear cuenta</a>
</div>

</body>
</html>
