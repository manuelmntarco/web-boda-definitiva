<?php
$servername = "localhost";
$username = "u624946957_manuelmont";
$password = "***CONTRASENA_ELIMINADA***"; // cambia si tienes contraseña
$database = "u624946957_boda_invitados";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$acompanantes = $_POST['acompanantes'];
$menu = $_POST['menu'];

// Insertar datos
$sql = "INSERT INTO confirmaciones (nombre_apellidos, acompanantes, menu_especial)
        VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $acompanantes, $menu);

if ($stmt->execute()) {
    echo "¡Gracias por confirmar tu asistencia!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>