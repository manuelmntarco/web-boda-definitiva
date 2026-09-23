# Web de boda

Web estática con formulario de confirmación de asistencia en PHP y MySQL.

## Puesta en marcha en local

Requisitos: Docker con el plugin Compose.

```bash
cp config.example.php config.php
docker compose up -d --build
```

La web queda en <http://localhost:8080>.

La base de datos se crea sola al arrancar: el contenedor de MySQL ejecuta
`database/schema.sql` la primera vez. Para inspeccionarla desde el portátil,
la conexión es `127.0.0.1:3307`, usuario `boda`.

Para parar: `docker compose stop`. Para borrar los contenedores y los datos:
`docker compose down -v`.

## Estructura

| Ruta | Contenido |
|---|---|
| `index.html` | La web completa |
| `assets/` | CSS, JS e imágenes |
| `guardar_confirmacion.php` | Recibe el formulario y guarda en MySQL |
| `config.example.php` | Plantilla de configuración. Copiar a `config.php` |
| `database/schema.sql` | Esquema de la tabla `confirmaciones` |

`config.php` está en `.gitignore` y no se versiona: cada entorno tiene el suyo.
