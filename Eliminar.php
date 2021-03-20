<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="paginaTech";

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
</head>
<body>
	
	<div class="input-contenedor">
		
		

<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
		<h1>ELIMINACION DE USUARIO POR ID</h1>

	
	<input  id="Nom" type="text" name="id" placeholder="ingrese el ID a eliminar">
	<input type="submit" name="name"  class="btn" value="Eliminar">


	<a class="link" href="pagina.php">Volver</a>
	
</form>
</div>
</body>
</html>
<?php 


if(isset ($_POST['name'])){
$user= $_POST['id'];


$insertarDatos = ("DELETE FROM datos WHERE id = $user");
echo "Eliminado correctamente";

$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}



?>