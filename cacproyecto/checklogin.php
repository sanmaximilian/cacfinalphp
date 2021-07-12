<?php
echo $_POST['inputEmail'] . "<BR>";
echo $_POST['inputPassword'] . "<BR>";

require("./clases/basededatos.php");

$NuevaConexion = new conectarse();
$NuevaConexion->conecta();

$query = "select * from usuarios where  usuario = '" . $_POST['inputEmail'] .
                                        "' and  clave = " . $_POST['inputPassword'];
echo $query;
$result = $NuevaConexion->ejecutar($query);      
$row_cnt = $result->num_rows;

echo "<BR>". "Cantidad de usuarios encontrados: ";
echo $row_cnt ;

?>