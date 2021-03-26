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
       <link rel="stylesheet" href="css/disenoredes.css" />

    </head>
    <body>
    	<div id="wrapper">
            <div id="bg"></div>
            <div id="overlay"></div>
            <div id="main">

    <header id="header">
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" method="POST" name="formulario" >
		<div class="input-contenedor">
        <h1>Busqueda</h1>
					<input id="Nom" type="text" name="fun_id" placeholder="Ingrese el Usuario que desea consultar">
        </div>
		
			
			<input  id="registro" type="submit" class="btn" name="buscar" value="Buscar">
            
            <a class="link" href="pagina.php">Volver</a>


</div>
    </div>
</div>
</header>


</body>
</html>		

<div class="formulario">

            <table class="input-contenedor" >
                <tr >
                    <th>usuario</th><tr></tr>
                    <th>nombre</th><tr></tr>
                    <th>correo</th><tr></tr>
                    
              
                </tr>
                    <?php

                    if (isset($_POST['buscar'])){
                    	$fun_di = $_POST['fun_id'];
                        $consulta = "SELECT * FROM fundaciones WHERE fun_id=$fun_di";

                       $ejecutarConsulta = mysqli_query($enlace, $consulta);
                        $verFilas = mysqli_num_rows($ejecutarConsulta);
                        $fila = mysqli_fetch_array($ejecutarConsulta);

                        if(!$ejecutarConsulta){
                            echo"Error en la consulta";
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
                                            
                                         
                                        </tr>
                                    ';
                                    $fila = mysqli_fetch_array($ejecutarConsulta);

                                }

                            }
                        }

}
                    ?>



