<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "restaurante";

$conectar = mysqli_connect($servername, $username, $password, $dbname);

if (!$conectar) {
    echo("Conexión fallida: " . mysqli_connect_error());
}
?>
