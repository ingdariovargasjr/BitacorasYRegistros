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
$sql_1 = "SELECT * FROM usuario_scia WHERE id=$borrar";
$stmt = sqlsrv_query($conn, $sql);
$user = $_GET['user'];
$fecha = $date;
$user = $_GET['user'];
$user = $_POST['user'];
$vinculado = $_GET['vinculado'];
//aqui tendria que ir el html

$backup = "SELECT * FROM usuario_scia WHERE id='$borrar'";

$stsm = sqlsrv_query($conn, $backup);
while ($row = sqlsrv_fetch_Array($stsm, SQLSRV_FETCH_ASSOC)) {

    $id = $row["id"];
    $usuario = $row["username"];
    $correo = $row["correo_electronico"];
    $contraseña = $row["password"];
    $area = $row["area"];
    $vinculado = $row["vinculado"];
}

$eliminacion = "INSERT INTO bitacoras (correo_electronico, username, password, area, fecha, vinculado, accion, pers_modifico, enTabla) 
    VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "','" . $fecha . "','" . $vinculado . "','DESACTIVADO', '" . $user . "', 'CSIA')";

if ($result2 === sqlsrv_query($conn, $eliminacion)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {

    /*echo "<script>
alert('Datos editados correctamente.');
window.location.href = 'registros.php?user=$user';
</script>";*/
}
/*echo "<script>
alert('Llene todos los campos.');
window.location.href = 'registros.php?user=$user';
</script>";*/

/*$sql = "DELETE FROM usuario_scia WHERE id='$borrar'";

if ($result === sqlsrv_query($conn, $sql)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    echo "<script>
    confirm('¿Estas seguro que quieres elmiminar este registro?');
    window.location.href = 'registros_scia.php?user=$user'
</script>";
}
/*echo "<script>
alert('Llene todos los campos.');
window.location.href = 'registros.php';
</script>";*/




header("location: registros_scia.php?user=$user");