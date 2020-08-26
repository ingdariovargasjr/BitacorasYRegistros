use bitacoras;

CREATE TABLE datos_usuario
(
    id INT IDENTITY (1,1) NOT NULL PRIMARY KEY,
    correo_electronico VARCHAR (40),
    username VARCHAR (20),
    password VARCHAR (20),
    area VARCHAR (30),
estado VARCHAR FOREIGN KEY REFERENCES datos_bitacoras(estado)
);

CREATE TABLE datos_bitacoras
(
    estado VARCHAR (20) NOT NULL PRIMARY KEY,
    id INT FOREIGN KEY REFERENCES datos_usuario(id)
);

INSERT INTO datos_usuario
    (correo_electronico, username, password, area)
VALUES
    ('dariovargasjr@gmail.com', 'dario', '12345', 'usuario de prueba');

--DELETE FROM registros WHERE id = 2;

SELECT *
FROM datos_usuario;



DROP TABLE datos_bitacoras;

SELECT *
FROM datos_bitacoras;

DROP TABLE datos_usuario;
--DROP TABLE registros;
