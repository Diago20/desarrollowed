<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
      <h1>Listado de usuarios registrados</h1>
      <div id="container" >
        <table style="margin: auto; width: 800px; border-collapse: separarte; border-spacing: 10px 5px">
  <thead>
    <th>Nombres</th>
    <th>Email</th>
    <th>Pasword</th>
    <th>FechaNacimiento</th>
    <th>Telefono</th>
    <th>ColoFavorito</th>
    <th>NumeroFavorito</th>
    <th>SitioWeb</th>
    <th>Archivo</th>
  </thead>

    <?php

    include_once 'php/conecxion.php';
    $consultarUsuarios = "SELECT * FROM `formulario`";
    $resultadoUsuarios = $conectar -> query($consultarUsuarios) or die (mysqli_error($conectar));
    while ($fila=$resultadoUsuarios->fetch_assoc()) {
      echo "<tr>";
      echo "<td>"; echo $fila['Nombre']; echo "</td>";
      echo "<td>"; echo $fila['Email']; echo "</td>";
      echo "<td>"; echo $fila['Pasword']; echo "</td>";
      echo "<td>"; echo $fila['FechaNacimiento']; echo "</td>";
      echo "<td>"; echo $fila['Telefono']; echo "</td>";
      echo "<td>"; echo $fila['ColoFavorito']; echo "</td>";
      echo "<td>"; echo $fila['NumeroFavorito']; echo "</td>";
      echo "<td>"; echo $fila['SitioWeb']; echo "</td>";
      echo "<td>"; echo $fila['Archivo']; echo "</td>";
    }

    ?>
        </table>
      </div>
    </div>
</body>
</html>