<?php
require_once("con.php");
if ((isset($_POST['correo_electronico']) && $_POST['correo_electronico'] != '') 
    && (isset($_POST['usuario']) && $_POST['usuario'] != '')
    && (isset($_POST['contraseña']) && $_POST['contraseña'] != '')
    && (isset($_POST['rep_contraseña']) && $_POST['rep_contraseña'] != '')
    && (isset($_POST['area']) && $_POST['area'] != '')
) {
    require_once("nuevo_registro.php");

    $correo = $conn->real_escape_string($_POST['correo_electronico']);
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $contraseña = $conn->real_escape_string($_POST['contraseña']);
    $area = $conn->real_escape_string($_POST['area']);

    $sql = "INSERT INTO registros (correo_electronico, username, password, area) 
    VALUES ('" . $tolva . "','" . $fecha_ingreso . "', '" . $inicio_almacenaje . "', '" . $fin_almacenaje . "','" . $almac_generado . "','" . $cuota . "','" . $subtotal . "')";

    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        echo "Datos cargados al sistema.";
    }
} else {
    echo "Llene todos los campos.";
}