<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database_name= "hcode_shop";

$mysqli = new mysqli($hostname,$username,$password,$database_name);
if($mysqli->connect_errno){
    echo "Falha na conexão com o banco de dados:(". $mysqli->connect_errno . ")" . $mysqli->connect_error;
}

?>