<?php
include 'conexion.php';
// if ((isset($_POST['correo_electronico']) && $_POST['correo_electronico'] != '')
//     && (isset($_POST['usuario']) && $_POST['usuario'] != '')
//     && (isset($_POST['contraseña']) && $_POST['contraseña'] != '')
//     && (isset($_POST['area']) && $_POST['area'] != '')
// ) {
//     require_once("nuevo_registro.php");


$servername = "192.168.60.148";

$connectioninfo = array("Database" => "bit_database", "UID" => "sa", "PWD" => "multimodal.hp");
$conn = sqlsrv_connect($servername, $connectioninfo);
if ($conn) {
    echo "Conectado";
} else {
    echo "No conectado";
    die(print_r(sqlsrv_errors(), true));
}

$time = date_default_timezone_set('America/Monterrey');
$date = date('d/m/Y h:i:s a', time());
//$usuario = $username;

$fecha = $date;
$edit = $_GET['edit'];
$id = $_POST['id'];
$correo = $_POST['correo_electronico'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$area = $_POST['area'];
$time = date_default_timezone_set('America/Monterrey');
$date = date('d/m/Y h:i:s a', time());
$userBit = $_POST['userBit'];
$user = $_GET['user'];
$user = $_POST['user'];
$vinculado = $_POST['vinculado'];

//aqui tendria que ir el html

echo $sql = "UPDATE usuario_multimodal SET correo_electronico= '$correo', username= '$usuario', password= '$contraseña', area='$area', vinculado='$vinculado' WHERE id='$edit'";

echo $edicion = "INSERT INTO bitacoras (correo_electronico, username, password, area, fecha, vinculado, accion, pers_modifico, enTabla) 
    VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "', '" . $vinculado . "', '" . $fecha . "','EDICIÓN', '" . $user . "', 'MULTIMODAL')";

echo $sql2 = "SELECT * FROM usuario_multimodal WHERE id='$edit'";



if ($result === sqlsrv_query($conn, $sql) && $result2 === sqlsrv_query($conn, $sql2)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    echo "<script>
            alert('Datos editados correctamente.');
            
        </script>";
}
echo "<script>
            alert('Llene todos los campos.');
            
        </script>";



$stsm = sqlsrv_query($conn, $sql2);
while ($row = sqlsrv_fetch_Array($stsm, SQLSRV_FETCH_ASSOC)) {

    $id = $row["id"];
    $usuario = $row["username"];
    $correo = $row["correo_electronico"];
    $contraseña = $row["password"];
    $area = $row["area"];
    $vinculado = $row["vinculado"];
}

echo $edicion = "INSERT INTO bitacoras (correo_electronico, username, password, area, fecha, vinculado, accion, pers_modifico, enTabla) 
    VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "', '" . $fecha . "', '" . $vinculado . "','EDICIÓN', '" . $user . "', 'MULTIMODAL')";


if ($result2 === sqlsrv_query($conn, $edicion)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    echo "<script>
            alert('Datos editados correctamente.');
            window.location.href = 'registros_multimodal.php?user=$user';
        </script>";
}
echo "<script>
            alert('Llene todos los campos.');
            window.location.href = 'registros_multimodal.php?user=$user';
        </script>";


//header("location: registros_mla.php?user=$user");