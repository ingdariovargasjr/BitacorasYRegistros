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
        <section class="container ui">
            <?php include "conexion.php";

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
                            <th> <font face='Montserrat'><strong></strong></font> </th> 
                            <th> <font face='Montserrat'><strong>USUARIO</strong></font> </th> 
                            <th> <font face='Montserrat'><strong>CORREO ELECTRONICO</strong></font> </th> 
                            <th> <font face='Montserrat'><strong>CONTRASEÑA</strong></font> </th> 
                            <th> <font face='Montserrat'><strong>AREA</strong></font> </th> 
                            <th> <font face='Montserrat'><strong></strong></font> </th> 
          
          
                        </tr>";
            echo "</tr>";

            $stsm = sqlsrv_query($conn, $sql);
            while ($row = sqlsrv_fetch_Array($stsm, SQLSRV_FETCH_ASSOC)) {

                echo "<tr>";
                echo "<td>" . $id = $row["id"];
                echo "<td>" . $user = $row["username"];
                echo "<td>" . $correo = $row["correo_electronico"];
                echo "<td>" . $password = $row["password"];
                echo "<td>" . $area = $row["area"];


                echo '<td>';

            ?>

            <a class="btn btn-outline-primary" name="editado" id="editado"
                href="editado.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil fa-fw"
                    aria-hidden="true"></i>Editar</a>
            <a name"borrado" id"borrado" class="btn btn-outline-danger"
                href="user_delete.php?borrar=<?php echo $row['id']; ?>">
                <i class="fa fa-trash-o" aria-hidden="true"></i>Borrar</a>




            </td>
            </tr>

            <?php } ?>
            </table>






            <div class="buttons" align="center">
                <a class="btn btn-outline-success"
                    href="nuevo_registro.php?user=<?php echo $user = $_GET['user']; ?>">Nuevo
                    Registro</a>

            </div>



            <br>
            <br>

        </section>
    </main>

</body>



<footer class="page-footer dark">
    <div class="footer-copyright">
        <p>© 2020 Multimodal</p>
    </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/smoothproducts.min.js"></script>
<script src="assets/js/theme.js"></script>


</html>