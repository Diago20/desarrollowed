<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "tu_base_de_datos";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL para verificar el inicio de sesión
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    
    // Ejecutar la consulta
    $result = $conn->query($sql);
    
    // Verificar si se encontró un usuario válido
    if ($result->num_rows > 0) {
        // Usuario válido, haz lo que necesites aquí
        echo "Inicio de sesión exitoso.";
    } else {
        // Usuario no válido, muestra un mensaje de error o redirige a la página de inicio de sesión
        echo "Inicio de sesión fallido. Verifica tus credenciales.";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
