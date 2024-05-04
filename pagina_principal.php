<?php
//seguridad de paginación de la sesión
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if($varsesion== null || $varsesion== ''){
    header('location: index.php');
    die();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo1.png" type="image/x-icon">
    <title>Proyecto-Integrador</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style\pagina_principal.css" />
</head>
<body>
    <div class="nav">
        <li class="profile"><img src="usuario.jpg" alt="profile" width="35" height="35"></li>
        <li><b><a href="pagina_principal.php">Tendencia</li></a></b>
        <li class="search"><input type="search" placeholder="Buscar"></li>
        <li><b><a href="cerrar_sesion.php">Cerrar sesion</li></a></b>
    </div>

    <!-- --------------------nav End -------------------- -->

    <div class="container">
        <div class="card card_small">
            <img src="recursos\1.jpg" alt="">
        </div> 

        <div class="card card_large">
            <img src="recursos\2.jpg" alt="">
        </div>
        <div class="card card_small">
            <img src="recursos\3.jpg" alt="">
        </div>
        
        <div class="card card_small">
            <iframe class="video" src="recursos\video1.mp4" height="100%" width="100%" frameborder="0" scrolling="no" ></iframe>
        </div>
        <div class="card card_midium">
            <img src="recursos\4.jpg" alt="">
        </div>
        <div class="card card_small">
            <img src="recursos\5.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\6.jpg" alt="">
        </div>
        <div class="card card_large">
            <img src="recursos\7.jpg" alt="">
        </div>

        <div class="card card_small">
            <img src="recursos\8.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\9.jpg" alt="">
        </div>

        <div class="card card_small">
            <img src="recursos\10.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\11.jpg" alt="">
        </div>
        <div class="card card_small">
            <img src="recursos\12.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\13.jpg" alt="">
        </div>
        <div class="card card_large">
            <img src="recursos\14.jpg" alt="">
        </div>
        <div class="card card_large">
            <img src="recursos\15.jpg" alt="">
        </div>

        <div class="card card_midium">
            <iframe class="video" src="recursos\video2.mp4" height="100%" width="100%" frameborder="0" scrolling="no" ></iframe>
        </div>

        <div class="card card_small">
            <img src="recursos\16.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\17.jpg" alt="">
        </div>
        <div class="card card_small">
            <img src="recursos\18.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\19.jpg" alt="">
        </div>
        <div class="card card_large">
            <img src="recursos\20.jpg" alt="">
        </div>
        <div class="card card_large">
            <img src="recursos\21.jpg" alt="">
        </div>
        <div class="card card_small">
            <img src="recursos\22.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\23.jpg" alt="">
        </div>
        <div class="card card_small">
            <img src="recursos\24.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\25.jpg" alt="">
        </div>
        <div class="card card_large">
            <img src="recursos\26.jpg" alt="">
        </div>
        
        <div class="card card_large">
            <iframe class="video" src="recursos\video3.mp4" height="100%" width="100%" frameborder="0" scrolling="no" ></iframe>
        </div>

        <div class="card card_small">
            <img src="recursos\16.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\17.jpg" alt="">
        </div>
        <div class="card card_small">
            <img src="recursos\18.jpg" alt="">
        </div>
        <div class="card card_midium">
            <img src="recursos\19.jpg" alt="">
        </div>

        <div class="card card_small">
            <img src="recursos\3.jpg" alt="">
        </div>
        
        <div class="card card_small">
            <iframe class="video" src="recursos\video1.mp4" height="100%" width="100%" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="card card_midium">
            <img src="recursos\4.jpg" alt="">
        </div>

    </div>
</body>
</html>