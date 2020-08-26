<?php
$servername = "192.168.60.148";

$connectioninfo = array("Database" => "bit_database", "UID" => "sa", "PWD" => "multimodal.hp");
$conn = sqlsrv_connect($servername, $connectioninfo);
if ($conn) {
    //echo "Conectado";
} else {
    echo "No conectado";
    die(print_r(sqlsrv_errors(), true));
}