# Ejemplos básicos de PHP

[/abm_example](./abm_example/abm_example.php)

ABM significa Alta Baja Modificacion y es un ejemplo básico de uso de php para la gestion de base de datos

Para ejecutarlo se necesitan los siguientes pasos:

1.- Crear la base de datos *book_example* en mysql :dolphin: 

```sql
CREATE DATABASE book_example;
```
2.- Crear la tabla usuarios :page_with_curl:
```sql
CREATE TABLE usuarios(
    -> id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    -> nombre VARCHAR(50),
    -> apellido VARCHAR(50),
    -> email VARCHAR(50),
    -> clave VARCHAR(50));
```
3.- Insertar un usuario de prueba :boy:
```sql
INSERT INTO usuarios(nombre, apellido, email, clave) VALUES('Josue', 'Canaviri', 'user@email.com', '123');
```
