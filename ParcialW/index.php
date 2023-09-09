<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="background-image">
        <h1>Iniciar sesión</h1>
        <form action="./php/menu.php" method="POST">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password1" name="password1" required>
            <button type="submit">Iniciar sesión</button>
        </form>
        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
    </div>
</body>
</html>
