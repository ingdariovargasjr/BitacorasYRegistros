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

$edit = $_GET['edit'];
//new code.
//datos a registrar
$id = $_POST['id'];
$correo = $_POST['correo_electronico'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$area = $_POST['area'];
$vinculado = $_POST['vinculado'];
$time = date_default_timezone_set('America/Monterrey');
$date = date('d/m/Y h:i:s a', time());
echo $userBit = $_POST['userBit'];
echo $user = $_GET['user'];


echo $sql = "INSERT INTO usuario_multimodal (correo_electronico, username, password, area, vinculado) 
VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "', '" . $vinculado . "')
";

echo $sql2 = "INSERT INTO bitacoras (correo_electronico, username, password, area, vinculado, fecha, accion, pers_modifico, enTabla) 
       VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "', '" . $vinculado . "','" . $date . "','CREACIÓN', '" . $userBit . "','MULTIMODAL')";

if ($result === sqlsrv_query($conn, $sql)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    /*echo "<script>
            alert('Datos cargados al sistema.');
            window.location.href='registros_multimodal.php?user=$user';
</script>";*/
}

if ($result2 === sqlsrv_query($conn, $sql2)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    echo "<script>
alert('Datos cargados al sistema.');
window.location.href = 'registros_multimodal.php?user=$userBit';
</script>";
}

/*echo "<script>
alert('Llene todos los campos.');
window.location.href = 'registros_multimodal.php';
</script>";*/




//header("location: registros_multimodal.php?user=$user");