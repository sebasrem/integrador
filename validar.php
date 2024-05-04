<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","integrador");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:pagina_principal.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>
        <script>alert('EL USUARIO NO EXISTE, POR FAVOR REGISTRARSE O VERIFICAR LAS CREDENCIALES');</script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


