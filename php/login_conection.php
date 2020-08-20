<?php 
// if (empty($_POST['user'])){
// 	header("index.html");
// }

$user = $_POST['user']; 
$pass = $_POST['pass'];

include "con.php"; 	

 $sql1 ="SELECT * FROM datos_usuarios WHERE username = '$user' and password = '$pass'";

$stmt1 = sqlsrv_query($conn,$sql1);
$row = sqlsrv_fetch_array($stmt1);

if(count($row)<1) {
		 //echo "Usuario y/o contraseña incorrecto.</br>";
		 //echo count($row);
	    //echo"<script>alert('Usuario y/o contraseña incorrecto.')</script>";
	echo'<script type="text/javascript">
    alert("Usuario y/o contraseña incorrecto.");
    window.location.href="login.php";
    </script>';
	} 
else {
 $nombre=$row['nombre']."</b>";
  $pass=$row['password']."</b>";
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
    <?php 
				 $id=$row['id'];
	  			 $fecha=date('Y-m-d');
	  			$caducidad=$row['caducidad']->format('Y-m-d');
	  			if ($caducidad<=$fecha){
					header("location: restaurar.php?user=$user&id=$id&nombre=$nombre");
				}else{ ?>
    <iframe src="estadias.php?user=<?php echo $user ?>&pass=<?php echo $pass ?>&nombre=<?php echo $nombre?>" name="rss"
        style="width: 100%"></iframe>
    <?php } ?>
</body>

</html>

<?php }

 // echo 'Bienvenido '.$user;
	sqlsrv_free_stmt($stmt);
	sqlsrv_free_stmt($stmt1);
	sqlsrv_close($conn);
?>