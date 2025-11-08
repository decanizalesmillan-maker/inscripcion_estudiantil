<?php
$servername = "localhost";
$username = "root";   // usuario por defecto en XAMPP
$password = "";       // sin contraseña por defecto
$dbname = "inscripcion_estudiantil";  // nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
