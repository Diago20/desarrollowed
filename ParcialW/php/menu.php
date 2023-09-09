<?php
session_start();
include_once "conexion.php";

$correo = $_POST['correo'];
$password1 = $_POST['password1'];

$validar_inicio = "SELECT count(*) as contar FROM formulario WHERE correo = '$correro' and password1 = '$password1'";

$resultado = mysqli_query($conectar, $validar_inicio);

$array = mysqli_fetch_array($resultado);

if($array['contar']>0){
    echo '<script> alert("Contraseña incorrecta"); window.location.href = "../index.php" </script>';
}else{
    header("location: ../carta.php");
    
}
mysqli_close($conectar);
?>




<?php
session_start();

include_once "conexion.php";


?>