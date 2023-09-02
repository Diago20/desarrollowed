<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Preguntas Personales</title>
    <link rel="stylesheet" href="../../css/formulario.css">
</head>
<body>
    <h1 class="titulo-formulario">Formulario de Preguntas Personales</h1>
    <form class="formulario" action="procesar_formulario.php" method="post">
        <label for="nombre" class="etiqueta">Nombre:</label>
        <input type="text" name="nombre" class="campo" required>
        
        <h2 class="subtitulo">Preguntas Personales</h2>
        <ol class="preguntas-lista">
            <li>
                <label for="pregunta1" class="etiqueta">Pregunta 1:</label>
                <input type="text" name="pregunta1" class="campo" required>
            </li>
            <!-- Repite esto para las demás preguntas -->
        </ol>
        
        <button type="submit" class="boton">Enviar Respuestas</button>
    </form>
</body>
</html>

