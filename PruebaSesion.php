<?php 

require 'Sesion.php';

    if($_SESSION["Usuario"]){  
       $_SESSION["Usuario"];
    }
    else{
        header("location:index.html");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Tenemos Sesion</h1>
</body>
</html>