<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Registro</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/smoothproducts.css">
    <script src="https://use.fontawesome.com/a2cfb5ecf7.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <!---------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="./js/demo.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>

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
                    <li class="nav-item active" role="presentation"><a class="nav-link"
                            href="registros_multimodal.php?user=<?php echo $user = $_GET['user']; ?>">MULTIMODAL</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="registros_mla.php?user=<?php echo $user = $_GET['user']; ?>">MLA</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="registros_scia.php?user=<?php echo $user = $_GET['user']; ?>">SCIA</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="registros_sodasa.php?user=<?php echo $user = $_GET['user']; ?>">SODASA</a></li>
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
        <section class="container ui align-content-sm-start">
            <br />
            <br />
            <br />
            <h1 class="text-info">
                <font face="Montserrat"><strong>REGISTROS DE MULTIMODAL</strong></font>
            </h1>
            <h5 class="text">
                <font face="Montserrat">Para acceder a <a href="http://webmail.alestraune.net.mx/app/">Alestra</a>,
                    es con el usuario:
                    admalta@altamiramultimodal.com.mx y la contraseña: Multimodal.7</font>
            </h5>

        </section>

    </main>

    <!-- aqui comienza la tabla -->
    <section id="content" class="content" style="padding: 50px;">
        <div class="grid-container">
            <form>
                <div class="row">
                    <div style=" overflow-x:auto; width: 1990px;">
                        <table id="example"
                            class="table table-striped table-bordered table-responsive-sm table-hover text-center">
                            <thead>
                                <tr>
                                    <th>
                                        <font face="Montserrat"><strong>N°</strong></font>
                                    </th>
                                    <th>
                                        <font face="Montserrat"><strong>USUARIO</strong></font>
                                    </th>
                                    <th>
                                        <font face="Montserrat"><strong>CORREO ELECTRONICO</strong></font>
                                    </th>
                                    <th>
                                        <font face="Montserrat"><strong>CONTRASEÑA</strong></font>
                                    </th>
                                    <th>
                                        <font face="Montserrat"><strong>AREA</strong></font>
                                    </th>
                                    <th>
                                        <font face="Montserrat"><strong>VINCULADO A</strong></font>
                                    </th>
                                    <th>
                                        <font face="Montserrat"><strong>ACCIONES</strong></font>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php include "conexion.php";
                                $user = $_GET['user'];
                                $sql = "SELECT * FROM usuario_multimodal";
                                $stmt = sqlsrv_query($conn, $sql);

                                if ($stmt === false) {

                                    die(print_r(sqlsrv_errors(), true));
                                }



                                $stsm = sqlsrv_query($conn, $sql);
                                while ($row = sqlsrv_fetch_Array($stsm, SQLSRV_FETCH_ASSOC)) {

                                    echo "<tr>";
                                    echo "<td>" . $id = $row["id"];
                                    echo "<td>" . $user = $row["username"];
                                    echo "<td>" . $correo = $row["correo_electronico"];
                                    echo "<td>" . $password = $row["password"];
                                    echo "<td>" . $area = $row["area"];
                                    echo "<td>" . $vinculado = $row["vinculado"];
                                    echo '<td>';

                                ?> <a class="btn btn-outline-primary" name="editado" id="editado"
                                    href="editado_multimodal.php?edit=<?php echo $row['id']; ?>&user=<?php echo $user = $_GET['user']; ?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Editar</a>
                                <a name="borrado" id="borrado" class="btn btn-outline-danger"
                                    href="user_delete_multimodal.php?borrar=<?php echo $row['id']; ?>&user=<?php echo $user = $_GET['user']; ?>">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>Borrar</a>




                                </td>


                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </section>

    </tbody>
    </div>

    </table>
    </div>







    <div class="buttons" align="center">
        <a class="btn btn-outline-success"
            href="nuevo_registro_multimodal.php?user=<?php echo $user = $_GET['user']; ?>">Nuevo
            Registro</a>

    </div>



    <br>
    <br>

    </section>


</body>



<footer class="page-footer dark">
    <div class="footer-copyright">
        <p>© 2020 Multimodal</p>
    </div>
</footer>



<script type="text/javascript" src="js2/jquery-3.2.1.min.js"></script>
<script src="js2/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});
</script>

</html>