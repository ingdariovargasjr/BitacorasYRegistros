use bit_database;

----------------------------------------------------------------------------------------------------------------
CREATE TRIGGER  'after_insert_usuario' ON bitacoras
AFTER INSERT ON usuario_multimodal
FOR EACH ROW
BEGIN
INSERT INTO bitacoras (correo_electronico, username, password, area, fecha, vinculado, accion, pers_modifico) 
        VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "' '" . $vinculado . "','" . $date . "','CREACIÓN', '" . $userBit . "','SODASA');
END

----------------------------------------------------------------------------------------------------------------
CREATE TRIGGER  'before_delete_usuario' ON bitacoras
BEFORE DELETE ON usuario_multimodal
FOR EACH ROW
BEGIN
INSERT INTO bitacoras (correo_electronico, username, password, area, fecha, vinculado, accion, pers_modifico) 
        VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "' '" . $vinculado . "','" . $date . "','CREACIÓN', '" . $userBit . "','SODASA');
END

----------------------------------------------------------------------------------------------------------------
ALTER TRIGGER [dbo].[HashTags_BeforeDelete]
    ON [dbo].[HashTags]
    FOR DELETE
AS
  BEGIN
    INSERT INTO HashTagsArchive(Id, HashTagId, delete_date)
       SELECT 
           d.Id, d.HashTagId, GETUTCDATE() 
       FROM deleted d 
  END
GO