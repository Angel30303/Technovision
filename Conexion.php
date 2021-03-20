<?php 

$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$database = "Technovision";

$con = mysqli_connect($servidor,$usuario,$contrasena);

$db = mysqli_select_db($con,$database) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

 ?>