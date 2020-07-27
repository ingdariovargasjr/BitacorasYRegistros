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

//datos a registrar
$correo = $_POST['correo_electronico'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$area = $_POST['area'];
$fecha = getdate();

$usuarioBit = $_POST['userLogin'];



$sql = "INSERT INTO usuario (correo_electronico, username, password, area) 
    VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "')";

if ($result === sqlsrv_query($conn, $sql)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    echo "<script>
            alert('Datos cargados al sistema.');
            window.location.href='registros.php';
        </script>";
}

echo "<script>
            alert('Llene todos los campos.');
            window.location.href='registros.php';
        </script>";


$creacion = "INSERT INTO usuariobit (correo_electronico, username, password, area, fechabit, accion, pers_modifico) 
    VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "','" . $fecha . "','CREACION', '" . $usuarioBit . "')";

if ($result2 === sqlsrv_query($conn, $actualizacion)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    //do nothing
}
echo "<script>
            alert('Llene todos los campos.');
            window.location.href='registros.php';
        </script>";


header("location: registros.php");