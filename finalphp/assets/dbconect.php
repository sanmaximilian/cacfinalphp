<?php
echo ("Conectar con la DB <br>");

$host="localhost";
$usuariodb="root";
$clave="";
$db="cacfinal";

$conexion=mysqli_connect($host,$usuariodb,$clave,$db);

if ($conexion){echo "ok, se conecto";}else {"noseconecto";} ;


?>