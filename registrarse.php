<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style\registrarse.css" />
    <title>Proyecto-Integrador</title>
    <style>
        section{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100vh;
            background: url(fondo.jpg) no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
  <form action="" method="POST">
    <section>
        <div class="contenedor">
            <div class="formulario">
                    <h2>Registrarse</h2>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" required name="usuario">
                        <label for="#">Usuario</label>
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" required name="contraseña">
                        <label for="#">Contraseña</label>
                    </div>

                    <div class="ingresar">
                    <button value="Enviar" name="registro" >Registrar</button>
                    <a href="index.php"></a>
                    </div>                   
                    <div class="registrar">
                    <a href="index.php">Regresar</a>
                    </div>
                   

            </div>
        </div>
    </section>
  </form>

  <?php 
        include("registrar.php");
  ?>
</body>


</html>


