<?php
$servername = "localhost";  // Nombre del servidor (usualmente 'localhost' en XAMPP)
$username = "root";         // Nombre de usuario (por defecto en XAMPP es 'root')
$password = "";             // Contraseña (por defecto en XAMPP es vacía)
$dbname = "teckluck"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>