<?php
include 'db_connection.php'; // Asegúrate de incluir tu archivo de conexión

// Ejemplo de inserción de datos
$sql = "INSERT INTO teckluck (campo1, campo2) VALUES ('valor1', 'valor2')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>