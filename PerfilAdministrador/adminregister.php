<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/LogoT.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="email" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Acepta la politica
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registro</button>
                        <p></p>
                        <button type="submit"class="btn btn-primary btn-flat m-b-30 m-t-30" href="admin.html"><i ></i>Volver</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>Tienes una cuenta ? <a href="admin.html"> Login</a></p>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
<?´php error_reporting(1);?>
<?php
include("Conexion.php");



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