<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="./css/registro.css">
</head>
<body>
    <h1>Registrarse</h1>
    <form action="./php/formulario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <label for="localidad">Localidad:</label>
        <input type="text" id="localidad" name="localidad" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="referencia">Referencia:</label>
        <input type="text" id="referencia" name="referencia" required>

        <label for="nPedido">Número de Pedido:</label>
        <input type="text" id="nPedido" name="nPedido" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password1" name="password1" required>

        <label for="password">Repetir la Contraseña:</label>
        <input type="password" id="password2" name="password2" required>

        <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión</a></p>
</body>
</html>

