<?php
include "conexion.php";
$sql = "SELECT * FROM usuario_multimodal ORDER BY id desc";
$stmt = sqlsrv_query($conn, $sql, array());

if (!$stmt) {
    echo "Error executing query.</br>";
    die(print_r(sqlsrv_errors(), true));
}

$json_user = array();
$cont_user = 0;

do {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $json_user[] = $row;
        $cont_user = $cont_user + 1;
    }
} while (sqlsrv_next_result($stmt));