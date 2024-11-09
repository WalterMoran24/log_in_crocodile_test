<?php
session_start();

$servername = "localhost";
$username = "root"; // Reemplaza con tu usuario de base de datos
$password = ""; // Reemplaza con tu contraseña de base de datos
$dbname = "mi_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['contrasena'])) {
        $_SESSION['authenticated'] = true;
        header('Location: protected.php');
        exit();
    } else {
        echo "Contraseña incorrecta. <a href='login.html'>Intente de nuevo</a>.";
    }
} else {
    echo "Usuario no encontrado. <a href='login.html'>Intente de nuevo</a>.";
}

$conn->close();
?>
