<?php

include_once "conecxion.php";

$Nombre = $_POST['nombre'];
$Email = $_POST['email'];
$Pasword = $_POST['password'];
$Pasword2 = $_POST['password2'];
$FechaNacimiento = $_POST['fecha'];
$Telefono = $_POST['telefono'];
$ColoFavorito = $_POST['color'];
$NumeroFavorito = $_POST['numero'];
$SitioWeb = $_POST['url'];
$Archivo = $_POST['archivo'];

$validarUser = "SELECT * From 'nombre' = WHERE 'nombre' = '$Nombre' = '$Nombre' ";

$resultadoUser = mysqli_query($conectar,$validarUser);

$numeroregistros = mysqli_num_rows($resultadoUser);

if ($numeroregistros>0) {
    echo '<script> alert("El usuario ya esta registrado") </script>';
    header("Location:../index.php");
}else{

$Pasword = hash('sha512', $Pasword);
$Pasword2 = hash('sha512', $Pasword2);

if ($Pasword != $Pasword2) {
    echo '<script> alert("No coincide la contraseña") </script>';
    header("Location:../index.php");
}else {
    $insertar = "INSERT INTO formulario(Nombre, Email, Pasword, FechaNacimiento, Telefono, ColoFavorito, NumeroFavorito, SitioWeb, Archivo) VALUES ('$Nombre','$Email','$Pasword','$FechaNacimiento','$Telefono','$ColoFavorito','$NumeroFavorito','$SitioWeb','$Archivo')";
//$Pasword = hash('sha512', $Pasword);
$resultado = mysqli_query($conectar,$insertar);

if (!$resultado) {
    echo '<script> alert("Error al Registrar") </script>';
    header("Location:../index.php");
}else{
    echo  '<script> alert("Registro exitoso") </script>';
    header("Location:../index.php");
}
}
}


mysqli_close($conectar);

?>