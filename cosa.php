<?php

require 'Config.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Technovision</title> 
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="Css/estilos.css">


</head>
<body>
    <form class="formulario" method="POST" action="">

    <h1>BIENVENIDO</h1>
     <div class="contenedor">

     <div class="input-contenedor">
         <input type="text" name="user_usuario" placeholder="Usuario">
     </div>
         <div class="input-contenedor">
            <input type="password" name="user_contrasena" placeholder="Contraseña">
         </div>
               <input  id="registro" type="submit" class="btn" name="login" value="Registrate">
        </div>
    </form>
</body>
</html>