# Proyecto de CodeIgniter 3

Este es un proyecto de ejemplo utilizando el framework CodeIgniter versión 3.

## Requisitos

- PHP >= 7
- MySQL (u otro motor de base de datos compatible con CodeIgniter)
- Apache Server (u otro servidor web compatible)

## Instalación

1. Clona este repositorio en tu sistema local:
```bash
  git clone https://github.com/andres-enciso/contraloria_cocodi
 ```

2. Crea una base de datos en tu servidor MySQL.

3. Importa el archivo SQL proporcionado en la carpeta `database` a tu base de datos recién creada.

4. Configura la conexión a la base de datos en `application/config/database.php` con los datos correspondientes:

```php
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'tu_usuario_mysql',
    'password' => 'tu_contraseña_mysql',
    'database' => 'nombre_de_tu_base_de_datos',
    'dbdriver' => 'mysqli',
    ...
);
 ```

Inicia tu servidor local (Apache, Nginx, etc.).

Accede a la URL de tu proyecto en un navegador web para comenzar a utilizarlo.


# Contacto
Nombre: Andres Enciso

Correo Electrónico: andresenciso20@gmail.com

GitHub: andres-enciso

¡Gracias por contribuir a este proyecto!