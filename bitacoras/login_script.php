<?php
include 'conexion.php';


$username = $_POST['usuario'];
$password = $_POST['contraseña'];




include "usuarios_login.php";

$sql1 = "SELECT username, password FROM usuario_interno WHERE username = '$username' and password = '$password'";
$sql2 = "SELECT username FROM usuario_interno";

$stmt1 = sqlsrv_query($conn, $sql1);
$row = sqlsrv_fetch_array($stmt1);
$stmt2 = sqlsrv_query($conn, $sql2);

if (count($row) < 1) {
    echo "<script>
            alert('Usuario y/o contraseña incorrecto.');
            window.location.href='index.php';
        </script>";



    //echo '<script>alert("Usuario y/o contraseña incorrecto.");</script>';
    //echo "Usuario y/o contraseña incorrecto.</br>";
    //echo count($row);
} else {
    echo "<script>
            alert('Bienvenido!.');
            window.location.href='inicio.php?user=$username';
        </script>";
    //header('Location: index.php');
?>



<html>

<head>
    <style type="text/css">
    html,
    body,
    div,
    iframe {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    iframe {
        display: block;
        width: 100%;
        border: none;
    }
    </style>
</head>

<body>
    <iframe src="index.php?usuario=<?php echo $username ?>" name="rss" style="width: 100%"></iframe>
</body>

</html>

<?php }
sqlsrv_free_stmt($stmt);
sqlsrv_free_stmt($stmt1);
sqlsrv_close($conn);
?>