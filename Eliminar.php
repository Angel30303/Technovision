<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="Technovision";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="Css/diseñoredes.css">
</head>
<body>
	
	<div id="wrapper">
      <div id="bg"></div>
      <div id="overlay"></div>
      <div id="main">
    
  
  
	
		<header id="header">

<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
		<h1>ELIMINACION DE USUARIO </h1>

	
	<input  id="Nom" type="text" name="fun_id" placeholder="ingrese el ID a eliminar">


	<input type="submit" name="name"  class="btn" value="Eliminar">



	<a class="link" href="pagina.php">Volver</a>
	
</form>
</div>
</header>
  </div>
</body>
</html>
<?php 



if(isset ($_POST['eliminar'])){


$fun_id= $_POST['fun_id'];


$insertarDatos = ("DELETE FROM fundaciones WHERE fun_id = $fun_id");
echo "Eliminado correctamente";

$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error En la linea de sql";
        }
    }



?>