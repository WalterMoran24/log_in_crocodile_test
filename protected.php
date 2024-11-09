<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Bienvenido a la página protegida</h1>
    <p>Has ingresado correctamente.</p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
