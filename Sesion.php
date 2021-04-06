<?php
	if(session_start()){
		
	}else{
		session_start();
	}

require "Conexion.php";
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if((!isset($_SESSION["Usuario"]) !="0") && (!isset($_SESSION['Admin']) !="0")) {
	header("Location: ../PerfilAdministrador/adminhistorial.php");
}

?>