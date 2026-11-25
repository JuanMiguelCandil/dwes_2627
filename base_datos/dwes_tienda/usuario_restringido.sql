-- Active: 1789981282765@@127.0.0.1@3306@dwes_tienda
USE dwes_tienda;
CREATE USER 'dwes_tienda'@'localhost' IDENTIFIED BY '123456';
GRANT SELECT, INSERT, UPDATE, DELETE ON dwes_tienda.* TO 'dwes_tienda'@'localhost';
FLUSH PRIVILEGES;