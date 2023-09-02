<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Formulario </title>
</head>
<body>
    <form action="./php/registro.php" method = "post">
        <h2>Formulario</h2>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="password" required>
        
        <label for="contrasena2">Repite Contraseña:</label>
        <input type="password" id="contrasena2" name="password2" required>

        <label for="fecha">Fecha de Nacimiento:</label>
        <input type="date" id="fecha" name="fecha">
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">
        
        <label for="color">Color Favorito:</label>
        <input type="color" id="color" name="color">
        
        <label for="numero">Número Favorito:</label>
        <input type="number" id="numero" name="numero">
        
        <label for="url">Sitio Web:</label>
        <input type="url" id="url" name="url">
        
        <label for="archivo">Archivo:</label>
        <input type="file" id="archivo" name="archivo">
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

