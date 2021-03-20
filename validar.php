 <?php

	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="paginatech";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Technovision</title> 
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="Css/diseñoredes.css">
    <link rel="stylesheet" href="estilo.css">


</head>
<body>
  <div id="wrapper">
      <div id="bg"></div>
      <div id="overlay"></div>
      <div id="main">
    
  </div>


  <form class="formulario">

    <h1>BIENVENIDO</h1>
     <div class="contenedor">

     <div class="input-contenedor">
         <input type="text" placeholder="Usuario">
     </div>



         <div class="input-contenedor">
            <input type="password" placeholder="Contraseña">
         </div>
               <input  id="registro" type="submit" class="btn" name="login" value="Registrate">
        </div>
    </form>
</div>
</body>
</html>

   <?php
    if(isset($_POST['login'])){
  $usuario = $_POST["usuario"];
  $contraseña=$_POST["contraseña"];

if ($usuario == "" ||$_POST['contraseña'] == null ) {
echo "fatan datos";
} else{
  $sql = "SELECT * FROM datos WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
  if (!$consulta = $conexion->query($sql)) {
   echo "error";
  }else{ 
    $filas = mysqli_num_rows($consulta);
     if($filas == 0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
            }else{
                header('index.html'); // Si está todo correcto redirigimos a otra página

  }
}

}
}

?>