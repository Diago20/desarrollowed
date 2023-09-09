<?php
include_once "conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$localidad = $_POST['localidad'];
$telefono = $_POST['telefono'];
$referencia = $_POST['referencia'];
$nPedido = $_POST['nPedido'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$validarUser = "SELECT * FROM formulario WHERE correo = '$correo'";
$resultadoUser = mysqli_query($conectar, $validarUser);
$numeroregistros = mysqli_num_rows($resultadoUser);

if ($numeroregistros > 0) {
    echo '<script> alert("El correo ya está registrado") </script>';
    header("Location:../registro.php");
} else {
    if ($password1 !== $password2) {
        echo '<script> alert("Las contraseñas no coinciden") </script>';
        //header("Location:../registro.php");
    } else {
        $insertar = "INSERT INTO formulario (nombre,apellido,correo,cedula,direccion,localidad,telefono,referencia,nPedido,password1) VALUES ('$nombre','$apellido','$correo','$cedula','$direccion','$localidad','$telefono','$referencia','$nPedido','$password1')";
        $resultado = mysqli_query($conectar, $insertar);

        if (!$resultado) {
            echo '<script> alert("Error al Registrar: ' . mysqli_error($conectar) . '") </script>';
            //header("Location:../index.php");
        } else {
            echo  '<script> alert("Registro exitoso") </script>';
            header("Location:../index.php");
        }
    }
}

mysqli_close($conectar);
?>
