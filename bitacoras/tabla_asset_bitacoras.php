<html>
<meta charset="utf-8" />

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
    <main class="page registration-page">
        <section class="container ui align-content-sm-start">
            <br />
            <br />
            <br />
            <h1 class="text-info">
                <font face="Montserrat"><strong>BITACORAS</strong></font>
            </h1>

        </section>

    </main>

    <section id="content">
        <div class="grid-container">
            <form>
                <div class="row" style="margin-top: 20px">
                    <div style=" overflow-x:auto; width: 2000px;">
                        <table id="example" class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th>
                                        <font face='Montserrat'><strong>USUARIO</strong></font>
                                    </th>
                                    <th>
                                        <font face='Montserrat'><strong>CORREO ELECTRONICO</strong></font>
                                    </th>
                                    <th>
                                        <font face='Montserrat'><strong>CONTRASEÑA</strong></font>
                                    </th>
                                    <th>
                                        <font face='Montserrat'><strong>AREA</strong></font>
                                    </th>
                                    <th>
                                        <font face='Montserrat'><strong>VINCULADO</strong></font>
                                    </th>
                                    <th>
                                        <font face='Montserrat'><strong>FECHA</strong></font>
                                    </th>
                                    <th>
                                        <font face='Montserrat'><strong>ACCION</strong></font>
                                    </th>
                                    <th>
                                        <font face='Montserrat'><strong>AUTOR</strong></font>
                                    </th>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php include "conexion.php";
                                //$user = $_GET['user'];
                                $sql = "SELECT * FROM bitacoras";
                                $stmt = sqlsrv_query($conn, $sql);

                                if ($stmt === false) {

                                    die(print_r(sqlsrv_errors(), true));
                                }



                                $stsm = sqlsrv_query($conn, $sql);
                                while ($row = sqlsrv_fetch_Array($stsm, SQLSRV_FETCH_ASSOC)) {

                                    echo "<tr>";
                                    echo "<td>" . $row["username"] . "</font> </td>";
                                    echo "<td>" . $row["correo_electronico"] . "</td>";
                                    echo "<td>" . $row["password"] . "</td>";
                                    echo "<td>" . $row["area"] . "</td>";
                                    echo "<td>" . $row["vinculado"] . "</td>";
                                    echo "<td>" . $row["fecha"] . "</td>";
                                    echo "<td>" . $row["accion"] . "</td>";
                                    echo "<td>" . $row["pers_modifico"] . "</td>";
                                    echo "</tr>";

                                ?>




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
</body>

<script type="text/javascript" src="js2/jquery-3.2.1.min.js"></script>
<script src="js2/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});
</script>

</html>