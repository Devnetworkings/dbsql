# 🚀 Sistema CRUD de Usuarios - UPTECMS

Este es un sistema de **Gestión de Usuarios (CRUD)** desarrollado como parte de la práctica de laboratorio para la carrera de Ingeniería en Informática en la **UPTECMS**.

## 🛠️ Tecnologías Utilizadas
* **Backend:** PHP (con la extensión `mysqli` para la conexión).
* **Frontend:** HTML5 y CSS3.
* **Base de Datos:** MySQL (MariaDB vía XAMPP).

## 📋 Requisitos Previos
1.  **XAMPP** instalado en Windows.
2.  Servidor **Apache** y **MySQL** activos.
3.  PHP 7.4 o superior.

## 🗄️ Configuración de la Base de Datos
Para que el sistema funcione correctamente, debes crear la base de datos en **phpMyAdmin** y ejecutar el siguiente script SQL:

```sql
CREATE DATABASE usersys2;
USE usersys2;

CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

---
## 🎬 Créditos y Autoría
* **Desarrollador:** Willian Josué Mosquera Marcano
* **Institución:** Universidad Politécnica Territorial de Caracas Mariscal Sucre (UPTECMS)
* **Carrera:** Ingeniería en Informática
* **Proyecto:** CRUD Básico de Usuarios - Práctica de Laboratorio
