<html>

<body>
    <?php
   /* $username = "sa";
    $password = "multimodal.hp";
    $database = "bitacoras";
    $sqlsrvi = new sqlsrv("SERVER", $username, $password, $database);
    $query = "SELECT * FROM registros";*/


    echo '<table align = "center" border="0" cellspacing="6" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">USUARIO</font> </td> 
          <td> <font face="Arial">CORREO ELECTRONICO</font> </td> 
          <td> <font face="Arial">CONTRASEÑA</font> </td> 
          <td> <font face="Arial">AREA</font> </td> 
          
      </tr>';

    if ($result = $mysqli->query($query)) {

        // $cont = 0;

        while ($row = $result->fetch_assoc()) {
            $field1name = $row["tolva"];
            $field2name = $row["fecha_ingreso"];
            $field3name = $row["inicio_almacenaje"];
            $field4name = $row["fin_almacenaje"];

            echo '<tr>
                  <td>' . $field1name . '</td> 
                  <td>' . $field2name . '</td> 
                  <td>' . $field3name . '</td> 
                  <td>' . $field4name . '</td>  
              </tr>';


            //$cont++;
        }



        // echo '<tr>
        // <td> ENTRADAS: '.$cont.'</tr> <tr>';

        $result->free();
    }
    ?>
</body>

</html>