<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['cedula'])) {
    // Si no ha iniciado sesión, redirigir al formulario de inicio de sesión
    header('Location: login.html');
    exit();
}

// Mostrar la página de inicio después de iniciar sesión
$cedula = $_SESSION['cedula'];
header('Location: index1.php
');
?>
