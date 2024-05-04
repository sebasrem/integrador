<?php 
    include("home.php");

    if (isset($_POST['registro'])) {
        if(
            strlen($_POST['usuario']) >= 1 &&
            strlen($_POST['contraseña']) >= 1 
         ) {

            $usuario = $_POST['usuario'];
            $contraseña =$_POST['contraseña'];
            $consulta = "INSERT INTO usuarios(usuario,contraseña)
                VALUES('$usuario', '$contraseña')";
            $resultado = mysqli_query($conexion , $consulta);
            if ($resultado) {
                ?>
                    <script>alert('USUARIO REGISTRADO CORRECTAMENTE');</script>
                <?php
            } else {
                ?>
                    <script>alert('Registro no succesfull ');</script>
                <?php
         } 
        }else {
        ?>
                    <script>alert('llena los campos');</script>
                <?php
         } 
    }


?>