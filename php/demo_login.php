<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>bitacoras</title>
    <link rel="stylesheet" href="bitacoras/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/smoothproducts.css" />
</head>

<body>
    <?php

    $servername = "SERVER";
    $connectioninfo = array("Database" => "bitacoras", "UID" => "sa", "PWD" => "multimodal.hp");
    $conn = sqlsrv_connect($servername, $connection_info);

    if ($conn) {
        echo "Conectado";
    } else {
        echo "No conectado";
        die(print_r(sqlsrv_errors(), true));
    }

    $sql = "SELECT * FROM datos_usuarios";
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {

        die(print_r(sqlsrv_errors(), true));
    }

    echo "
    <table class='table'>
    <tr> 
          <th> <font face='Montserrat'><strong>USUARIO</strong></font> </th> 
          <th> <font face='Montserrat'><strong>CORREO ELECTRONICO</strong></font> </th> 
          <th> <font face='Montserrat'><strong>CONTRASEÑA</strong></font> </th> 
          <th> <font face='Montserrat'><strong>AREA</strong></font> </th> 
          
      </tr>
      </table>
    
    ";


    ?>

</body>

</html>