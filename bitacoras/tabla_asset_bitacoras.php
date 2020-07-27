<html>
<meta charset="utf-8" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>bitacoras</title>
    <!-- <link rel="stylesheet" href="bitacoras/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/smoothproducts.css" /> -->
</head>

<body>
    <?php include "conexion.php";


    /*$sql = "SELECT du.id, du.correo_electronico, du.username, du.password, du.area,
    db.estado
    FROM usuario AS du INNER JOIN bitacoras AS db ON du.id = db.id";*/
    $sql = "SELECT * FROM bitacoras";

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
    <h1 class='text-info'><strong>BITACORAS</strong></h1>
          <th> <font face='Montserrat'><strong>USUARIO</strong></font> </th> 
          <th> <font face='Montserrat'><strong>CORREO ELECTRONICO</strong></font> </th> 
          <th> <font face='Montserrat'><strong>CONTRASEÑA</strong></font> </th> 
          <th> <font face='Montserrat'><strong>AREA</strong></font> </th>
          <th> <font face='Montserrat'><strong>FECHA</strong></font> </th>  
          <th> <font face='Montserrat'><strong>ACCION</strong></font> </th> 
          <th> <font face='Montserrat'><strong>AUTOR</strong></font> </th> 
      </tr>
      
    
    ";

    ///////////////////////////////////////////////////////////////////////////////////////////////

    //////////////////////////////////////////////////////////////////////////////////////////

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
    }
    echo "</table>";
    ?>

</body>

</html>