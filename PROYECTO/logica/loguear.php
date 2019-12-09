<?php
require './conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['password'];

$q="SELECT COUNT(*)as contar FROM usuarios where username = '$usuario' and password = '$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0){
    $_SESSION['username']=$usuario;
    header("location: ../principal.php");

}else{
    $errorLogin = "Nombre de usuario y/o password incorrectos";
      header("location: ../login.php");

}
?>
