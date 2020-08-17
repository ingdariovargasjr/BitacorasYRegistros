<!DOCTYPE html>
<?php


include "conexion.php";
$edit = $_GET['edit'];
$sql = "SELECT * FROM usuario WHERE id=$edit";
$stmt = sqlsrv_query($conn, $sql);
$user = $_GET['user'];

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


$stsm = sqlsrv_query($conn, $sql);
while ($row = sqlsrv_fetch_Array($stsm, SQLSRV_FETCH_ASSOC)) {

    $id = $row["id"];
    $usuario = $row["username"];
    $correo = $row["correo_electronico"];
    $contraseña = $row["password"];
    $area = $row["area"];

?>

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registro Nuevo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar"
        style="background-color: rgb(33,55,171);color: #ffffff;font-size: 15px;">
        <div class="container"><a class="navbar-brand logo" href="inicio.php?user=<?php echo $user = $_GET['user']; ?>">
                <img src="assets/img/logM.png" style="width: 110px; height: 80px;" alt="image"></a><button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="registros.php?user=<?php echo $user = $_GET['user']; ?>">registros</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="bitacoras.php?user=<?php echo $user = $_GET['user']; ?>">bitacoras</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="acerca_de.php?user=<?php echo $user = $_GET['user']; ?>">acerca
                            de</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">

                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">cerrar
                            sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h1 class="text-info"><strong>EDITAR REGISTRO</strong></h1>
                    <p>Edite los datos deseados.</p>
                </div>
                <form method="post" action="user_edit.php?user=<?php echo $user = $_GET['user']; ?>">
                    <div class="form-group"><label for="correo_electronico">Email</label><input
                            class="form-control item" type="text" name="correo_electronico" id="correo_electronico"
                            value="<?php echo $correo ?>">
                    </div>
                    <div class="form-group"><label for="usuario">Usuario</label><input class="form-control item"
                            type="text" name="usuario" id="usuario" value="<?php echo $usuario ?>"></div>
                    <div class="form-group"><label for="contraseña">Contraseña</label><input class="form-control item"
                            type="password" name="contraseña" id="contraseña" value="<?php echo $contraseña ?>"></div>
                    <div class="form-group">
                        <label for="area">Area</label>
                        <input list="encodings" name="area" id="area"
                            class="form-control item col-sm-12 custom-select custom-select-sm"
                            value="<?php echo $area ?>">
                        <datalist id="encodings">
                            <option value="Dirección">Dirección</option>
                            <option value="Recursos Humanos">Recursos Humanos</option>
                            <option value="Recepción">Recepción</option>
                            <option value="Asistente de Presidencia">Asistente de Presidencia</option>
                            <option value="Relaciones Públicas">Relaciones Públicas</option>
                            <option value="Jurídico">Jurídico</option>
                            <option value="Contraloría">Contraloría</option>
                            <option value="Control Interno">Control Interno</option>
                            <option value="Tesorería">Tesorería</option>
                            <option value="Facturación">Facturación</option>
                            <option value="Sistemas">Sistemas</option>
                            <option value="Compras">Compras</option>
                            <option value="Transporte Especializado">Transporte Especializado</option>
                            <option value="Sodasa">Sodasa</option>
                            <option value="Obra Civil">Obra Civil</option>
                            <option value="Recinto">Recinto</option>
                            <option value="Recinto Facturación Maniobras">Recinto Facturación Maniobras</option>
                            <option value="Mantenimiento">Mantenimiento</option>
                            <option value="Mantenimiento Mecánico">Mantenimiento Mecánico</option>
                            <option value="SENASICA">SENASICA</option>
                            <option value="SADER Frigo">SADER Frigo</option>
                            <option value="Torre Externo">Torre Externo</option>
                            <option value="Báscula">Báscula</option>
                            <option value="Comercial Gerencia">Comercial Gerencia</option>
                            <option value="Comercial Bodegas">Comercial Bodegas</option>
                            <option value="Comercial Navieras">Comercial Navieras</option>
                            <option value="Comercial Ferroviaria">Comercial Ferroviaria</option>
                            <option value="Comercial Frigorifico">Comercial Frigorifico</option>
                            <option value="Comercial Transporte Esp.">Comercial Transporte Esp.</option>
                            <option value="Comercial Recinto">Comercial Recinto</option>
                            <option value="Comercial Arrendamientos">Comercial Arrendamientos</option>
                            <option value="Ferroviaria<">Ferroviaria</option>
                            <option value="Bodegas">Bodegas</option>
                            <option value="Transporte Esp.">Transporte Esp.</option>
                            <option value="Seguridad">Seguridad</option>
                            <option value="MLA">MLA</option>
                            <option value="Frigorifico">Frigorifico</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="CSIA">CSIA</option>
                            <option value="Nudo Marino">Nudo Marino</option>
                            <option value="Dormitorios">Dormitorios</option>
                            <option value="Dársena">Dársena</option>
                            <option value="Corporativo">Corporativo</option>
                            <option value="Caseta/Ferro">Caseta/Ferro</option>
                            <option value="Monitoreo">Monitoreo</option>
                        </datalist>
                    </div>


                    <div class="form-group-hidden"><label for="userBit"></label><input class="form-control-hidden"
                            type="hidden" name="userBit" id="userBit" value="<?php echo $edit = $_GET['edit']; ?>">
                        <div class="form-group-hidden"><label for="user"></label><input class="form-control-hidden"
                                type="hidden" name="user" id="user" value="<?php echo $user = $_GET['user']; ?>">
                        </div>
                        <input class="btn btn-outline-success btn-block" name="edicion" id="edicion" type="submit"
                            style="font-family: Montserrat, sans-serif;" value="Actualizar registro">
                        <a class="btn btn-outline-danger btn-block"
                            href="registros.php?user=<?php echo $user = $_GET['user']; ?>">Cancelar</a>
                    </div>


                </form>
                <?php } ?>

                <?php


                if (isset($_POST['creacion'])) {


                    $time = date_default_timezone_set('America/Monterrey');
                    $date = date('d/m/Y H:i:s', time());

                    $user = $_POST['usuario'];
                    $email = $_POST['correo_electronico'];
                    $pass = $_POST['contraseña'];
                    $area = $_POST['area'];
                    $accion = 'CREACION';
                    echo $accion;

                    $sql = "INSERT INTO usuario (correo_electronico, username, password, area) 
    VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "');" . "CREATE TRIGGER  'after_insert_usuario' ON bitacoras
BEFORE INSERT ON usuario
FOR EACH ROW
BEGIN
INSERT INTO usuarios_bit (correo_electronico, username, password, area, fecha, accion, pers_modifico) 
        VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "','" . $date . "','CREACION', '" . $usuario . "');
END";
                } else {
                    //do nothing
                }

                ?>
            </div>


        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2020 Multimodal</p>
        </div>
    </footer>
    <!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script> -->
</body>

</html>