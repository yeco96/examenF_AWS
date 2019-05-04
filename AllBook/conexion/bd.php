<?php

$hostname = "localhost";
$database= "allbook";
$username= "root";
$pass= ""; 

$mysql = new mysqli($hostname, $username, $pass, $database);

if($mysql->connect_errno){
    $error = "Falló la conexión";
}else{
    $error = false;
}
