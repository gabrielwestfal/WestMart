<?php

$servername = "localhost";
$usarname = "root";
$password = "";
$dbname = "westmart";

$conn = mysqli_connect($servername, $usarname, $password, $dbname);

if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}

?>
