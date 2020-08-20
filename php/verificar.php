<?php
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
require_once "con.php";

echo $username = $_POST['username'];
echo $password = $_POST['password'];

echo $sql = "SELECT username, password FROM datos_usuario WHERE username = '$username' AND password='$password'";

$result= $conn->query($sql);
if ($result){
    header("location: index.php");

}

else{
    echo "error en los campos.";
    header("location: tabla.php");
}

// if($stmt = mysqli_prepare($conn, $sql)){

//     if(mysqli_stmt_fetch($stmt)){
//         if(password_verify($password)){                        
                                    
//             header("location: index.php");
//             }
//             else{
                                   
//             $password_err = "Contraseña invalida.";



//             }

//              mysqli_stmt_close($stmt);
                            
                        

// }



 
// $username = $password = ""; 
// $username_err = $password_err = "";
 
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 

//     if(empty(trim($_POST["username"]))){
//         $username_err = "Ingrese el campo faltante.";
//     } else{
//         $username = trim($_POST["username"]);
//     }
    
   
//     if(empty(trim($_POST["password"]))){
//         $password_err = "Ingrese el campo faltante.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
  
//     if(empty($username_err) && empty($password_err)){
    
//         $sql = "SELECT username, password FROM usuarios WHERE username = '$username' AND password='$password'";
        
//         if($stmt = mysqli_prepare($conn, $sql)){
        
//             mysqli_stmt_bind_param($stmt, "s", $sql);
            
           
//             // $param_username = $username;
            
           
//             if(mysqli_stmt_execute($stmt)){
                
//                 mysqli_stmt_store_result($stmt);
                
            
//                 if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
//                     mysqli_stmt_bind_result($stmt, $username,$password);
//                     if(mysqli_stmt_fetch($stmt)){
//                         if(password_verify($password)){
                        
//                             session_start();
                            
//                             $_SESSION["loggedin"] = true;
//                             $_SESSION["id"] = $id;
//                             $_SESSION["username"] = $username;                            
                            
//                             header("location: index.php");
//                         } else{
                           
//                             $password_err = "Contraseña invalida.";
//                         }
//                     }
//                 } else{
                    
//                     $username_err = "Usuario inexistente.";
//                 }
//             } else{
//                 echo "Se encontró un error.";
//             }

            
//             mysqli_stmt_close($stmt);
//         }
//     }
    
   
    sqlsrv_close($conn);
//}
?>