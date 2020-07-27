<?php
//include 'conexion.php';
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

$modificacion = $_POST['modificacion'];
/*$correo = $_POST['correo_electronico'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$area = $_POST['area'];

 $sql = "INSERT INTO datos_usuarios (correo_electronico, username, password, area) 
    VALUES ('" . $correo . "','" . $usuario . "', '" . $contraseña . "', '" . $area . "')"; */

$sql = "INSERT INTO bitacoras (estado) VALUES ('" . $modificacion . "')";

if (!$result = $conn->query($sql)) {
    die('There was an error running the query [' . $conn->error . ']');
} else {
    echo "Datos cargados al sistema.";
}

echo "Llene todos los campos.";


header("location: bitacoras.php");