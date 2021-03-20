<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="technovision";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        <link rel="stylesheet" href="estilo.css">

    </head>
    <body>
    	

    
	<div class="contenedor">
	
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
		<div class="input-contenedor">
			<h1>Registrate</h1>

					<div class="input-contenedor">
					<input id="user" type="text" pattern="[A-Za-z0-9]{1,15}" name="user_usuario" placeholder="Usuario">
				</div>
				<div class="input-contenedor">
					<input id="Nom" type="text" name="user_nombre"placeholder="Nombre">
				</div>
				<div class="input-contenedor">
					<input id="Ape" type="text" name="user_apellido" placeholder="Apellidos">
				</div>
				<div class="input-contenedor">
					<input id="Con" type="text" name="user_contraseña" placeholder="Contraseña">
				</div>
				<div class="input-contenedor">
					<input id="ed" type="text" name="user_edad" placeholder="Edad">
				</div>
				<div class="input-contenedor">
					<input type="text" name="user_correo" placeholder="Correo">
				</div>
				<div class="input-contenedor">
					<input type="text" name="user_telefono" maxlength="8" minlength="8" placeholder="Telefono">
				</div>
				<div class="input-contenedor">
					<input type="text" name="user_direccion"  placeholder="Direccion">
					
				</div>

			<input  id="registro" type="submit" class="btn" name="registrarse" value="Registrate">

                 
				<a class="link" href="Eliminar.php">ELIMINAR</a>
				<a class="link" href="actualizar.php">ACTUALIZAR</a>
				<a class="link" href="prueba.php">BUSCAR</a>

		
		
	</div>
	
</body>
</html>
<?´php error_reporting(1);?>
<?php
	if(isset($_POST['registrarse'])){
		$user_usuario=$_POST["user_usuario"];
		$user_nombre =$_POST["user_nombre"];
        $user_apellido=$_POST["user_apellido"];
        $user_contraseña=$_POST["user_contraseña"];
        $user_edad =$_POST["user_edad"];
        $user_correo=$_POST["user_correo"];
        $user_telefono=$_POST["user_telefono"];
        $user_direccion=$_POST["user_direccion"];
		

		$insertarDatos = "INSERT INTO usuarios VALUES('$user_usuario',
													'$user_nombre',
                                                    '$user_apellido',
                                                    '$user_contraseña',
                                                    '$user_edad',
													'$user_correo',
													'$user_telefono',
													'$user_direccion')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if($ejecutarInsertar){
			echo"<script>alert('Esta registrado'); </script>";
		}else{
			echo"<script>alert('Usuario ya registrado'); </script>";
		}
	}
?>