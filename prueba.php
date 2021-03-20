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
        <title>Formulario De Registro</title>
       <link rel="stylesheet" href="estilo.css">
       <link rel="stylesheet" href="css/diseñoredes.css" />

    </head>
    <body>
    	<div id="wrapper">
            <div id="bg"></div>
            <div id="overlay"></div>
            <div id="main">

    <header id="header">
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
		<div class="input-contenedor">
        <h1>Busqueda</h1>
					<input id="Nom" type="text" name="id" placeholder="Ingrese el Usuario que desea consultar">
        </div>
		
			
			<input  id="registro" type="submit" class="btn" name="buscar" value="Buscar">
		
		


            <table class="tabla" >
                <tr >
                    <th>nombre</th><tr></tr>
                    <th>usuario</th><tr></tr>
                    <th>Correo</th><tr></tr>
                    <th>id</th><tr></tr>
                </tr>
                    <?php

                    if (isset($_POST['buscar'])){
                    	$usuario = $_POST['user_usuario'];
                        $consulta = "SELECT * FROM usuarios WHERE user_usuario=$usuario";

                        $ejecutarConsulta = mysqli_query($enlace, $consulta);
                        $verFilas = mysqli_num_rows($ejecutarConsulta);
                        $fila = mysqli_fetch_array($ejecutarConsulta);

                        if(!$ejecutarConsulta){
                            echo"Error en la consulta usuario no encontrado";
                        }else{
                            if($verFilas<1){
                                echo"Error sin registros asociados a ese ID";
                            }else{
                                for($i=0; $i<=$fila; $i++){
                                    echo'
                                        <tr>
                                            <td>'.$fila[0].'</td>
                                            <td>'.$fila[1].'</td>
                                            <td>'.$fila[2].'</td>
                                            
                                            <td>'.$fila[5].'</td>
                                        </tr>
                                    ';
                                    $fila = mysqli_fetch_array($ejecutarConsulta);

                                }

                            }
                        }

}
                    ?>

<a class="link" href="pagina.php">Volver</a>

</header>
</div>
</body>
</html>