<!DOCTYPE html>
<html lang="es/MX" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Registros</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="bitacoras/css/smoothproducts.css" />
    <script src="https://use.fontawesome.com/a2cfb5ecf7.js"></script>
</head>

<body>

    <?php include "conexion.php";
    $edit = $_GET['edit'];
    $user = $_GET['user'];
    $sql = "SELECT * FROM usuario";
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {

        die(print_r(sqlsrv_errors(), true));

        // if ($errors = sqlsrv_errors() != null) {
        //     foreach ($errors as $error) {
        //         echo "SQLSTATE: " . $error['code'] . "<br/>";
        //         echo "code: " . $error['code'] . "<br/>";
        //         echo "message: " . $error['message'] . "<br/>";
        //     }
        // }
    }

    echo "
    <table class='table'>
    <tr> 
    <br/>
    <br/>
    <br/>
        <h1 class='text-info'><font face='Montserrat'><strong>REGISTROS</strong></font></h1>
        <th> <font face='Montserrat'><strong>ID</strong></font> </th> 
          <th> <font face='Montserrat'><strong>USUARIO</strong></font> </th> 
          <th> <font face='Montserrat'><strong>CORREO ELECTRONICO</strong></font> </th> 
          <th> <font face='Montserrat'><strong>CONTRASEÑA</strong></font> </th> 
          <th> <font face='Montserrat'><strong>AREA</strong></font> </th> 
          <th> <font face='Montserrat'><strong>ACCIONES</strong></font> </th> 
          
          
      </tr>
      
    
    ";



    echo "</tr>";

    $stsm = sqlsrv_query($conn, $sql);
    while ($row = sqlsrv_fetch_Array($stsm, SQLSRV_FETCH_ASSOC)) {

        echo "<tr>";
        echo "<td>" . $id = $row["id"];
        echo "<td>" . $user = $row["username"];
        echo "<td>" . $correo = $row["correo_electronico"];
        echo "<td>" . $password = $row["password"];
        echo "<td>" . $area = $row["area"];

        //aqui van los botones
        echo '<td>';
        // echo ' 
    ?>

    <a class="btn btn-outline-primary" name="editado" id="editado"
        href="editado.php?edit=<?php echo $edit ?>&user=<?php $user ?>"><i class="fa fa-pencil fa-fw"
            aria-hidden="true"></i>Editar</a>
    <a name="borrado" id="borrado" class="btn btn-outline-danger"
        href="user_delete.php?borrar=<?php echo $id ?>&user=<?php $user ?>">
        <i class="fa fa-trash-o" aria-hidden="true"></i>Borrar</a>

    <div id="edit-modal" class="modal" tabindex="-1" role="form">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-info">
                        <font face="Montserrat"><strong>EDITAR REGISTRO</font></strong>
                    </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="block-heading">

                        <form class="container" font face="Montserrat" action="user_edit.php">
                            <div class="section">

                                <div class="form-group"><label for="correo_electronico">Email</label><input
                                        class="form-control item" type="text" name="correo_electronico"
                                        id="correo_electronico" value="<?php echo $correo ?>">
                                </div>
                                <div class="form-group"><label for="usuario">Usuario</label><input
                                        class="form-control item" type="text" name="usuario" id="usuario"
                                        value="<?php echo $user ?>"></div>
                                <div class="form-group"><label for="contraseña">Contraseña</label><input
                                        class="form-control item" type="password" name="contraseña" id="contraseña"
                                        value="<?php echo $password ?>">
                                </div>
                                <div class="form-group"><label for="area">Area</label><input class="form-control item"
                                        type="text" name="area" id="area" value="<?php echo $area ?>"></div>



                        </form>


                    </div>
                    </section>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-outline-success" type="submit" name="update"
                    style="font-family: Montserrat, sans-serif;">Actualizar registro</button>
            </div>
        </div>
    </div>
    </div>




    </td>
    </tr>

    <?php } ?>
    </table>



</body>


</html>