restore## Instrucciones de instalación

## Requerimientos

- Instalar PHP 8.1 en adelante (VS16 x64 Thread Safe).
<a href="https://windows.php.net/download#php-8.1">PHP</a>
- Instalar Composer.
<a href="https://getcomposer.org/">Composer</a>
- Instalar Node Js.
<a href="https://nodejs.org/en/">Node Js</a>
- Instalar Git
<a href="https://git-scm.com/">Git</a>

## GitHub

- Crear cuenta en GitHub
- Clonar repositorio

## Local

- Clonar repostorio "git clone https://github.com/irycemo/sistematramites.git"
- Correr  "composer install", dentro de la carpeta del desarrollo
- Correr "npm install".
- Correr "npm run dev".
- Crear la base de datos con el nombre "sistematramites".
- Configurar archivo .env
- Correr "php artisan key:generate", para generar llave de identificación de Laravel.
- Correr "php artisan migrate:fresh --seed", para llenar la base de datos.
- Correr "php artisan storage:link", para hacer link simbólico de la carpeta de imágenes.
