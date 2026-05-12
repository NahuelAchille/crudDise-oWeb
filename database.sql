CREATE DATABASE IF NOT EXISTS CRUD;
USE CRUD;

CREATE TABLE roles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL UNIQUE,   
  descripcion TEXT,                     
  activo TINYINT(1) DEFAULT 1           
);

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  dni VARCHAR(20) NOT NULL UNIQUE,
  fecha_nacimiento DATE,
  rol_id INT NOT NULL,
  domicilio VARCHAR(255),
  codigo_postal VARCHAR(10),
  observacion TEXT,
  activo TINYINT(1) DEFAULT 1,
fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (rol_id) REFERENCES roles(id)
);

INSERT INTO roles (nombre, descripcion, activo) VALUES
('admin', 'Administrador del sistema', 1),
('operador', 'Usuario con permisos de operación', 1),
('viewer', 'Usuario con permisos de solo lectura', 1);

