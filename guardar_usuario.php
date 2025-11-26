<?php
$conexion = new mysqli("localhost", "root", "", "login_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'] ?? '';
$correo = $_POST['correo'] ?? '';
$contrasena = password_hash($_POST['contrasena'] ?? '', PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (usuario, correo, contrasena) VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $usuario, $correo, $contrasena);

if ($stmt->execute()) {
    echo "✅ Usuario registrado correctamente <br><br>";
    echo "<a href='nuevo.php'>🔁 Volver al login</a>";
} else {
    echo "❌ Error: " . $stmt->error;
}
?>
