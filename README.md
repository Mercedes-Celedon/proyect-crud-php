# Proyecto CRUD en PHP

Este proyecto tiene como objetivo practicar la conexión a bases de datos en PHP y la implementación de un CRUD (Create, Read, Update, Delete) en un sitio web dinámico utilizando tarjetas (cards) para la visualización de usuarios. A través de este desarrollo, se refuerzan conocimientos en manipulación de datos, interacción con el servidor y estructuración de una aplicación web funcional. En el frontend, se han utilizado HTML y CSS para el diseño y presentación de la información.

## Características
- Aplicación desarrollada en PHP.
- Conexión a una base de datos MySQL.
- Operaciones básicas: Crear, Leer, Actualizar y Eliminar usuarios.
- Uso de un archivo de configuración `connection.php` para manejar la conexión con la base de datos.

## Base de Datos
La base de datos cuenta con una tabla llamada `usuarios` con la siguiente estructura:

```sql
CREATE TABLE usuarios (
    id INT(20) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL,
    apellido VARCHAR(20) NOT NULL,
    nacionalidad VARCHAR(20) NOT NULL,
    url_foto VARCHAR(1000),
    edad INT(20) NOT NULL,
    pasatiempo VARCHAR(50)
);
```

## Instalación y Configuración
1. Clona este repositorio en tu máquina local:
   ```bash
   git clone https://github.com/Mercedes-Celedon/proyect-crud-php.git
   ```
2. Importa el archivo SQL proporcionado en tu servidor MySQL para crear la base de datos y la tabla `usuarios`.
3. Configura la conexión a la base de datos en el archivo `connection.php` proporcionando los valores correctos para:
   ```php
   $host = "TU_SERVIDOR";
   $user = "TU_USUARIO";
   $password = "TU_CONTRASEÑA";
   $database = "TU_BASE_DE_DATOS";
   ```
4. Ejecuta el proyecto en un servidor local con soporte para PHP (como XAMPP, MAMP o WAMP).

## Uso
- **Crear usuario:** Completa el formulario de registro.
- **Listar usuarios:** Visualiza los usuarios registrados en la base de datos.
- **Actualizar usuario:** Modifica los datos de un usuario existente.
- **Eliminar usuario:** Borra un usuario de la base de datos.

## Contribuciones
Si deseas mejorar este proyecto, siéntete libre de hacer un fork y enviar un pull request.

## Licencia
Este proyecto es de código abierto y se distribuye bajo la licencia MIT.