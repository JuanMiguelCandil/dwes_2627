-- Active: 1789981282765@@127.0.0.1@3306@dwes_tienda
USE dwes_tienda;
CREATE USER 'user_dwes_tienda'@'localhost' IDENTIFIED BY '123456';
GRANT SELECT, INSERT, UPDATE, DELETE ON dwes_tienda.* TO 'user_dwes_tienda'@'localhost';
FLUSH PRIVILEGES;

DROP USER user_dwes_tienda@localhost;

SELECT * FROM mysql.user;

REPAIR TABLE mysql.global_priv;
REPAIR TABLE mysql.db;
REPAIR TABLE mysql.tables_priv;
REPAIR TABLE mysql.columns_priv;
REPAIR TABLE mysql.procs_priv;