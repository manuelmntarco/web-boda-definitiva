<?php
// Cargar la configuración de la base de datos.
// config.php no está en Git: se crea a partir de config.example.php
$config = require __DIR__ . '/config.php';

// Crear conexión
$conn = new mysqli(
    $config['host'],
    $config['usuario'],
    $config['password'],
    $config['base']
);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Usar UTF-8 completo para que tildes y eñes se guarden bien
$conn->set_charset('utf8mb4');

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
