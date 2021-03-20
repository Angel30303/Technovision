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
        <meta charset="utf-8"> 
        <title>Formulario De Actualizacion</title>
       <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
    	

  
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
		<div class="input-contenedor">
			<h1>Actualizacion</h1>

					<input id="Nom" type="text" name="nombre" placeholder="Nombre">
		</div>
				<div class="input-contenedor">
					<input id="user" type="text" name="usuario" placeholder="usuario">
				</div>
				<div class="input-contenedor">
					<input id="mail"  type="text" name="correo" placeholder="Correo">
				</div>
				<div class="input-contenedor">
					<input id="pss" type="password" name="contraseña" placeholder="contraseña">
				</div>
				<div class="input-contenedor">
					<input id="cpss" type="password" name="ccontraseña" placeholder="confirmar_contraseña">
				</div>
				<div class="input-contenedor">
					<input id="cpss" type="text" name="id" placeholder="id">
				</div>
			
				<div class="input-contenedor">
					<input id="nom" type="num" maxlength="10" minlength="10"  name="telefono" placeholder="Telefono">
				</div>
		


			<input  id="registro" type="submit" class="btn" name="Actualizarce" value="Actualizar">
		

	<a class="link" href="pagina.php">Volver</a>
		
	</div>
	
</body>
</html>
<?php
if (isset($_POST['Actualizarce'])){
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$id=$_POST["id"];



$insertarDatos="UPDATE datos SET nombre='$nombre',correo='$correo',contraseña='$contraseña', usuario='$usuario'where id='$id'";
echo "El registro se modifico correctamente ";



$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}

    }		
?> 