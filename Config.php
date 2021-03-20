<?php

require 'Conexion.php';

//phpinfo();

session_start();

if(isset($_POST['login'])){

    $user_usuario = $_POST['user_usuario'];
    $contrasena = $_POST['user_contrasena'];
    
    if (ValidarUsuario($user_usuario) == true) {
    	echo "<script>alert('GG')</script>";
        header("location:PruebaSesion.php");
    }else{
        header("location:prueba.php");
    }

    return null;
}

function ValidarUsuario($username){
    require 'Conexion.php';

    global $user_contrasena;
    $query_usuario = "SELECT COUNT(*) As Cantidad,contrasena From usuarios WHERE user_usuario= '$user_usuario';";

    $exe_usuario = mysqli_query($con,$query_usuario);

    $row = mysqli_fetch_array($exe_usuario);

    $resultados = $row['Cantidad'];

    $resultados;

    $pass = $row['contrasena'];
   
   if ($resultados > 0) {

        if ($user_contrasena == $pass) {
        $_SESSION['Usuario'] = $user_usuario;
        // echo "Estoy en Verdadero";
        return true;
        }else{
            return false;
            // echo "Sigo en Falso";
        }
    }else{
     // echo "Sigo en Falso";
     return false; 
    }
}


/*function ValidarAdmin($username){
    require 'Conexion.php';

    global $contrasena;
    $query_usuario = "SELECT COUNT(*) AS Fila,Username,Contrasena FROM usuarios WHERE Username = '$username' AND Contrasena = '$contrasena' AND Rango = 1 AND Pago = 1;";

    $exe_usuario = mysqli_query($con,$query_usuario);

    $row = mysqli_fetch_array($exe_usuario);

    $resultados = $row['Fila'];

    $resultados;

    $pass = $row['Contrasena'];

   if ($resultados > 0) {

        if ($contrasena == $pass) {
        $_SESSION['Admin'] = $username;
        // echo "Estoy en Verdadero";
        return true;
        }else{
            return false;
            // echo "Sigo en Falso";
        }
    }else{
     // echo "Sigo en Falso";
     return false; 
    }
}*/
?>