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
        <meta charset="utf-8"> 
        <title>Formulario De Actualizacion</title>
       <link rel="stylesheet" href="estilo.css">
       <link rel="stylesheet" href="Css/disenoredes.css">
    </head>
    <body>
    	<div id="bg"></div>
      <div id="overlay"></div>
      <div id="main">

  		</div>
  		<header id="header">
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
		<div class="input-contenedor">
			<h1>ACTUALIZACION</h1>
			<div class="input-contenedor">
					<input id="user" type="text" pattern="[A-Za-z0-9]{1,15}" name="user_usuario" placeholder="Usuario">
				</div>
				
				<div class="input-contenedor">
					<input id="Con" type="text" name="user_contraseña" placeholder="Contraseña">
				</div>
				
				
				<div class="input-contenedor">
					<input type="text" name="user_telefono" maxlength="8" minlength="8" placeholder="Telefono">
				</div>
				


			<input  id="registro" type="submit" class="btn" name="Actualizarce" value="Actualizar">
		

	<a class="link" href="pagina.php">Volver</a>
		
	</div>
	
</div>
</header>
</body>
</html>
<?php
if (isset($_POST['Actualizarce'])){
$usuario = $_POST['user_usuario'];
$contraseña = $_POST['user_contraseña'];
$telefono = $_POST["user_telefono"];





$insertarDatos="UPDATE usuarios SET  user_contraseña='$contraseña', user_telefono='$telefono'where user_usuario='$usuario'";
echo "El registro se modifico correctamente ";



$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}

    }		
?> 