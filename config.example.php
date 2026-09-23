<?php
// Configuración de la base de datos.
// Copia este fichero como config.php y ajusta los valores.
// config.php está en .gitignore: nunca se sube a Git.
//
// Los valores de abajo son los del entorno local con Docker Compose.
return [
    'host'     => 'db',        // nombre del servicio en docker-compose.yml
    'usuario'  => 'boda',
    'password' => 'boda_dev',
    'base'     => 'boda',
];
