<?php
// Incluir el archivo de conexión a la base de datos
include "conexion.php";

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Consulta SQL para verificar las credenciales
    $sql = "SELECT id, nombre FROM usuarios WHERE email = ? AND contraseña = ?";
    
    // Utilizar una consulta preparada para evitar inyección SQL
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $stmt->store_result();
        
        // Verificar si se encontró un usuario
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $nombre);
            $stmt->fetch();
            
            // Iniciar sesión
            session_start();
            $_SESSION["user_id"] = $id;
            $_SESSION["user_nombre"] = $nombre;
            
            // Redireccionar al usuario a la página de inicio
            header("Location: inicio.php");
        } else {
            echo "Credenciales incorrectas. Por favor, intenta de nuevo.";
        }
        
        // Cerrar la consulta preparada
        $stmt->close();
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>