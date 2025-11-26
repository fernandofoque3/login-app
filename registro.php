<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>

<h2>Registro de Usuario</h2>

<form action="guardar_usuario.php" method="POST">
    <input type="text" name="usuario" placeholder="Usuario" required><br><br>
    <input type="email" name="correo" placeholder="Correo" required><br><br>
    <input type="password" name="password" placeholder="Contraseña" required><br><br>
    <button type="submit">Registrar</button>
</form>

<a href="nuevo.php">Volver al login</a>

</body>
</html>
