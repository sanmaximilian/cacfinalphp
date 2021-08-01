<?php

class conectarse{
// definicion de atributos
private $host;
private $user;
private $password;
private $database;
private $conn;

public function __construct(){
$this->user='testing2019';
$this->password='codoacodo';
$this->database='cacproyecto';
$this->host='192.168.0.7';
}

public function conecta(){
// crea y retorna la conexión con la BD
$this->conn= new mysqli($this->host, $this->user, $this->password, $this->database);
if($this->conn->connect_errno){
    die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
}
}
public function cerrarbd(){
// Metodo que cierra la conexion con la BD
$this->conn->close();
}
public function ejecutar($sql){
$result = $this->conn->query($sql);
return $result;
}
public function renglones(){
return $this->conn->affected->rows;
}
public function ultimorenglon($result){
    return $result->fetch_row();
}
public function limpiarquery(){

    $result->free_result();
}
}
?>
