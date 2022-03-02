<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","admin","admin","login2.0");

$consulta="SELECT * FROM usuario where `login`='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{

    //include ('index.php');
    header('location:index.php?error=1');
  ?>
  <div ><h1 class=''></h1></div>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

