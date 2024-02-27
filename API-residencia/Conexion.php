<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "residencia";
$mysqli = new mysqli($host, $user, $password, $database);

if($mysqli -> connect_errno){
    echo "Error al conectar a la base de datos" .$mysqli -> connect_errno.'<br>';

} 

?>