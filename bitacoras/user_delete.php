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

$borrar = $_GET['borrar'];
$sql_1 = "SELECT * FROM usuario WHERE id=$borrar";
$stmt = sqlsrv_query($conn, $sql);
$user = $_GET['user'];
$fecha = $date;
$userBit = $_POST['userBit'];
//aqui tendria que ir el html

echo $sql = "DELETE FROM usuario WHERE id='$borrar'";

$eliminacion = "INSERT INTO bitacoras (correo_electronico, username, password, area, fecha, accion, pers_modifico) 
    VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "','" . $fecha . "','ELIMINACIÓN', '" . $usuarioBit . "')";

if ($result === sqlsrv_query($conn, $sql)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    echo "<script>
            alert('Datos editados correctamente.');
            window.location.href = 'registros.php';
        </script>";
}
echo "<script>
            alert('Llene todos los campos.');
            window.location.href='registros.php';
        </script>";

if ($result2 === sqlsrv_query($conn, $sql)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    echo "<script>
            alert('Datos editados correctamente.');
            window.location.href = 'registros.php?user=$userBit';
        </script>";
}
echo "<script>
            alert('Llene todos los campos.');
            window.location.href='registros.php?user=$userBit';
        </script>";


header("location: registros.php?user=$userBit");