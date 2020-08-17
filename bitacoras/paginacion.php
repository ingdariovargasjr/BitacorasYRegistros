<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Empleados</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=26d495fe543516956e9720ca2684d546" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" />
</head>

<body id="page-top" style="font-family: Roboto, sans-serif;">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="font-family: Roboto, sans-serif;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="assets/img/logM.png" style="width: 85px; height: 65px;" alt="image" />&nbsp;<span>EMPLEADOS</span></a>
                <hr class="sidebar-divider my-0" />
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="inicio.html"><i class="fas fa-tachometer-alt"></i><span>Inicio</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Perfil</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="empleados.html"><i class="fas fa-table"></i><span>Empleados</span></a>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="busqueda_especifica.html"><i class="fas fa-search"></i><span>Busqueda
                                especifica</span></a>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="font-family: Roboto, sans-serif;">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input class="bg-light form-control border-0 small" type="text" placeholder="Buscar..." style="font-family: Roboto, sans-serif;" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary py-0" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow">
                                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group">
                                            <input class="bg-light form-control{ border-0 small" type="text" placeholder="Search for ..." />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary py-0" type="button">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Empleados</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">
                                Informacion de empleados.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <label>Mostrar&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter">
                                        <label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search" /></label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <!------------------------------------------------------------------->

                                <main class="page registration-page">
                                    <section class="container ui">
                                        <?php include "conexion.php";
                                        $user = $_GET['user'];
                                        $sql = "SELECT * FROM usuario_sodasa";
                                        $stmt = sqlsrv_query($conn, $sql);

                                        if ($stmt === false) {

                                            die(print_r(sqlsrv_errors(), true));
                                        }

                                        echo "
                    
                            <th> <font face='Montserrat'><strong></strong></font> </th> 
                            <th> <font face='Montserrat'><strong>USUARIO</strong></font> </th> 
                            <th> <font face='Montserrat'><strong>CORREO ELECTRONICO</strong></font> </th> 
                            <th> <font face='Montserrat'><strong>CONTRASEÑA</strong></font> </th> 
                            <th> <font face='Montserrat'><strong>AREA</strong></font> </th> 
                            <th> <font face='Montserrat'><strong>VINCULADO A</strong></font> </th> 
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
                                            echo "<td>" . $vinculado = $row["vinculado"];
                                            echo '<td>';

                                        ?>

                                            <a class="btn btn-outline-primary" name="editado" id="editado" href="editado_sodasa.php?edit=<?php echo $row['id']; ?>&user=<?php echo $user = $_GET['user']; ?>"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Editar</a>
                                            <a name"borrado" id"borrado" class="btn btn-outline-danger" href="user_delete_sodasa.php?borrar=<?php echo $row['id']; ?>&user=<?php echo $user = $_GET['user']; ?>">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>Borrar</a>




                                            </td>
                                            </tr>

                                        <?php } ?>
                                        </table>






                                        <div class="buttons" align="center">
                                            <a class="btn btn-outline-success" href="nuevo_registro_sodasa.php?user=<?php echo $user = $_GET['user']; ?>">Nuevo
                                                Registro</a>

                                        </div>



                                        <br>
                                        <br>

                                    </section>
                                </main>
                                <!------------------------------------------------------------------->
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 27
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="font-family: Roboto, sans-serif;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright">
                        <span>Copyright © Multimodal 2020</span>
                    </div>
                </div>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js?h=b86d882c5039df370319ea6ca19e5689"></script>
</body>

</html>