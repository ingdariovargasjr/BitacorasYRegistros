CREATE DATABASE bit_database;
use bit_database;
------------------------------------------------------------------------------------------
CREATE TABLE usuario (
    id INT IDENTITY (1, 1) NOT NULL PRIMARY KEY,
    correo_electronico VARCHAR (55),
    username VARCHAR (20),
    password VARCHAR (20),
    area VARCHAR (30),
);
------------------------------------------------------------------------------------------
CREATE TABLE bitacoras(
    correo_electronico VARCHAR (55),
    username VARCHAR (20),
    password VARCHAR (20),
    area VARCHAR (30),
    fecha VARCHAR (60),
    accion VARCHAR (20),
    pers_modifico VARCHAR(20),
    id INT IDENTITY FOREIGN KEY REFERENCES usuario(id)
);
------------------------------------------------------------------------------------------
SELECT *
FROM bitacoras;
------------------------------------------------------------------------------------------
INSERT INTO usuario (correo_electronico, username, password, area)
VALUES (
        'analisis.sistemas@altamiramultimodal.com.mx',
        'ADMIN2',
        'admin2',
        'SISTEMAS'
    );
------------------------------------------------------------------------------------------
INSERT INTO bitacoras (estado)
VALUES ('CREACION');
------------------------------------------------------------------------------------------
DELETE FROM usuario
WHERE id = '7';
------------------------------------------------------------------------------------------
DROP TABLE bitacoras;
------------------------------------------------------------------------------------------
-- INSERT INTO bitacoras (estado)
-- SELECT estado
-- FROM bitacoras
-- WHERE id = '1'
-- VALUES ('CREACION');
------------------------------------------------------------------------------------------
SELECT *
FROM bitacoras;
------------------------------------------------------------------------------------------
SELECT *
FROM usuario;
------------------------------------------------------------------------------------------
SELECT du.id,
    du.correo_electronico,
    du.username,
    du.password,
    du.area,
    db.estado
FROM usuario AS du
    INNER JOIN bitacoras AS db ON du.id = db.id;
------------------------------------------------------------------------------------------
IF ('datos_usuarios...#temp') IS NOT NULL DROP TABLE datos_usuario;
------------------------------------------------------------------------------------------
CREATE TRIGGER before_update ON db.usuario
FOR UPDATE
AS
BEGIN 
    INSERT INTO usuarios_bit (correo_electronico, username, password, area, fecha, accion, pers_modifico) 
        VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "','" . $date . "','CREACION', '" . $usuario . "')
        END;

------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------
/* CREATE DATABASE bit_database;
 use bit_database;
 CREATE TABLE usuario (
 id INT IDENTITY (1, 1) NOT NULL PRIMARY KEY,
 correo_electronico VARCHAR (40),
 username VARCHAR (20),
 password VARCHAR (20),
 area VARCHAR (30),
 );
 CREATE TABLE bitacoras (
 estado VARCHAR (20),
 id INT IDENTITY (1, 1) NOT NULL FOREIGN KEY REFERENCES usuario(id)
 );
 INSERT INTO usuario (correo_electronico, username, password, area)
 VALUES (
 'dariovargasjr@gmail.com',
 'dario',
 '12345',
 'usuario de prueba'
 );
 --DELETE FROM registros WHERE id = 2;
 DROP TABLE bitacoras;
 INSERT INTO bitacoras (estado)
 VALUES ('ACTUALIZÓ');
 SELECT *
 FROM bitacoras;
 SELECT *
 FROM usuario;
 SELECT du.id,
 du.correo_electronico,
 du.username,
 du.password,
 du.area,
 db.estado
 FROM usuario AS du
 INNER JOIN bitacoras AS db ON du.id = db.id;
 IF ('bitacoras...#temp') IS NULL DROP TABLE bitacoras;
 DROP TABLE bitacoras; */