<?php
// Incluir el archivo de conexión a la base de datos
include "conexion.php";

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $preguntas = array();
    
    // Recopilar respuestas a las 10 preguntas
    for ($i = 1; $i <= 10; $i++) {
        $pregunta = $_POST["pregunta" . $i];
        $preguntas[] = $pregunta;
    }
    
    // Insertar las respuestas en la base de datos
    $sql = "INSERT INTO respuestas (nombre, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Utilizar una consulta preparada para evitar inyección SQL
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssssssss", $nombre, ...$preguntas);
        
        if ($stmt->execute()) {
            echo "Respuestas almacenadas con éxito.";
        } else {
            echo "Error al almacenar las respuestas: " . $stmt->error;
        }
        
        // Cerrar la consulta preparada
        $stmt->close();
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
