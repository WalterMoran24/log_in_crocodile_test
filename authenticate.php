<?php
session_start();

// Credenciales de usuario hard-coded (para demostración)
$correct_username = 'usuario';
$correct_password = 'contraseña123';

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar las credenciales
if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['authenticated'] = true;
    header('Location: protected.php');
    exit();
} else {
    echo "Usuario o contraseña incorrectos. <a href='login.html'>Intente de nuevo</a>.";
}
?>
