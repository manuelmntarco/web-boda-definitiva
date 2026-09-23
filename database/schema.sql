-- Tabla de confirmaciones de asistencia.
-- Reconstruida a partir del INSERT de guardar_confirmacion.php
-- (el esquema original de Hostinger no se conservó).

CREATE TABLE IF NOT EXISTS confirmaciones (
    id                 INT AUTO_INCREMENT PRIMARY KEY,
    nombre_apellidos   VARCHAR(255) NOT NULL,
    acompanantes       VARCHAR(255),
    menu_especial      TEXT,
    fecha_confirmacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
