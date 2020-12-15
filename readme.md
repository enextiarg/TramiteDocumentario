# Sistema de Trámite Documentario

El sistema permite llevar el control y poder ver el estado en el que se encuentra un trámite dentro de un municipio.

Est sistema está hecho con:
  - Laravel 5.3
  - MySQL
  - Bootstrap
  - jQuery
  - Redis

### Requesitos

Para realizar pruebas del sistema es necesario tener instalado

* PHP >= 5.4
* MySQL Server o MaríaDB
* Apache Server
* Composer
* Redis

### Instalación

Clonar el repositorio en algún directorio:
```sh
$ git clone https://github.com/JKodev/TramiteDocumentario.git
```
Instalar las dependencias utilizando Composer.

```sh
$ cd TramiteDocumentario
$ composer install
```

Luego se necesitará configurar el archivo `config/database.php`. Pero primero deberá configurar los datos de acceso a la base de datos en MySQL así como crear la base de datos.

```php
'mysql' => [
    'driver' => 'mysql',
    'host' => env('DB_HOST', 'localhost'), // IP del servidor
    'port' => env('DB_PORT', '3306'), // Puerto
    'database' => env('DB_DATABASE', 'forge'), // nombre de la base de datos
    'username' => env('DB_USERNAME', 'forge'), // usuario de la base de datos
    'password' => env('DB_PASSWORD', ''), // contraseña de la base de datos
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
    'strict' => true,
    'engine' => null,
],
```
Ahora tendrá que ejecutar el comando:
```sh
$ php artisan migrate:install
```
Si todo sale bien, entonces ejecuta el comando:
```sh
$ php artisan migrate
```
Luego debería insertar datos iniciales, entonces ejecuta el comando:
```sh
$ php artisan db:seed
```

### Entorno de Prueba
Si desea ejecutar la aplicación en un entorno de prueba, puede realizarlo sin la necesidad de instalar Apache, sólo utilizando PHP y ejecutando el comando:
```sh
$ php artisan serve
```
Si todo sale bien, usted podrá ingresar a la aplicación por medio de la url `http://localhost:8000/`.

Si desea detener el servidor, deberá presionar la combinación de teclas `Ctrl + C` en la consola donde se encuentra ejecutando el servidor.

### Entorno de Producción
Deberá contactar al Desarrollador para poder pasar la aplicación a producción.

Licencia
----

MIT

