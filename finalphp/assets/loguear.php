<?php

require 'dbconect.php';

session_start();

$email=$_POST['email'];
$pass=$_POST['password'];

// echo ("$usuario  $pass");

$q="SELECT COUNT(*) AS contar FROM usuarios WHERE nombre_usr = '$email' AND pass= '$pass' ";
$consulta= mysqli_query($conexion,$q);
$todos=mysqli_fetch_array($consulta);

if($todos['contar']>0){
    // guarda usuario session
    $_SESSION['username']=$email;
    // si todo ok redirecciona
    header("location: ../indexusr.php");
}else {
    echo "Datos incorrectos";
}

?>