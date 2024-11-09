<?php
$servername = "localhost";
$username = "root"; // Cambia esto si tu usuario de base de datos es diferente
$password = ""; // Cambia esto si tu usuario de base de datos tiene una contraseña
$dbname = "mi_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$usuario = 'usuario';
$contrasena = password_hash('contrasena123', PASSWORD_BCRYPT);

$sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo usuario creado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
