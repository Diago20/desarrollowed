<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../../css/incioSecion.css">
</head>
<body>
    <div class="contenedor">
        <h1>Iniciar Sesión</h1>
        <form class="form-container" action="login.php" method="post">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
