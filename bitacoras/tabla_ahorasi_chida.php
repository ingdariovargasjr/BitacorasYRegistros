<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <!--     <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css"> -->

    <!--     <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css"> -->
    <!---------------- ejemplo ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <!--     <link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css" type="text/css" media="all" /> -->
    <!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js">
    </script> -->
    <script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="./js/demo.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>

    <title>ALTAMIRA TERMINAL MULTIMODAL</title>
</head>

<body>
    <div class="full-width navBar">
        <div class="full-width navBar-options">
            <!-- <i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>   -->
            <!-- <div class="mdl-tooltip" for="btn-menu">Menu</div> -->
            <nav class="navBar-options-list" style="align-content: left">

            </nav>
        </div>
    </div>

    <section id="content">
        <div class="grid-container">
            <form>
                <h1 style="text-align: center;">VISTA DE TRANSFERENCIAS</h1>
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

    <!-- The Modal -->
    <div class="modal fade" id="myModal3">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="text-align: center;">EDITAR</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="js2/jquery-3.2.1.min.js"></script>
<script src="js2/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<!-- <script type="text/javascript">
$('.dropdown-toggle').dropdownHover(options);
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("menu_vertical", function() {
    var elMenu = new YAHOO.widget.Menu("menu_vertical", {
        width: '150px'
    });
    elMenu.render();
    elMenu.show();
});
</script> -->


<!-- <script type="text/javascript">
var timepicker = new TimePicker('time', {
    lang: 'en'
    theme: 'blue-grey'
});

timepicker.on('change', function(evt) {

    var value = (evt.hour || '00') + ':' + (evt.minute || '00');
    evt.element.value = value;

});
</script> -->