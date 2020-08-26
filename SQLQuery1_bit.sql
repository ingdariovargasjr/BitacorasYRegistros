use bit_database;
------------------------------------------------------------------------------------------
CREATE TABLE usuario (
    id INT IDENTITY (1, 1),
    correo_electronico VARCHAR (max),
    username VARCHAR (max),
    password VARCHAR (max),
    area VARCHAR (max),
	vinculado VARCHAR (max) 
);
------------------------------------------------------------------------------------------
CREATE TABLE bitacoras(
    correo_electronico VARCHAR (max),
    username VARCHAR (max),
    password VARCHAR (max),
    area VARCHAR (max),
	vinculado VARCHAR (max),
    fecha VARCHAR (max),
    accion VARCHAR (max),
    pers_modifico VARCHAR(max)
);
------------------------------------------------------------------------------------------
SELECT *
FROM bitacoras;
SELECT *
FROM usuario;
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
DROP TABLE usuario;
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
----------------en caso de necesitar (no ha sido creado ningun trigger)-------------------
CREATE TRIGGER before_update ON db.usuario
FOR UPDATE
AS
BEGIN 
    INSERT INTO usuarios_bit (correo_electronico, username, password, area, fecha, accion, pers_modifico) 
        VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "','" . $date . "','CREACION', '" . $usuario . "')
        END;

DELETE FROM bitacoras WHERE correo_electronico='';