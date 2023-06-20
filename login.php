<?php
require 'vendor/autoload.php';

session_start();

$mongoClient = new MongoDB\Client("mongodb+srv://venadillo:vena123@atlascluster.y7h4ftm.mongodb.net/?retryWrites=true&w=majority");
$database = $mongoClient->Proyecto;
$collection = $database->personas;

$cedula = $_POST['cedula'];
$contrasena = $_POST['contrasena'];

$resultado = $collection->findOne(['cedula' => $cedula, 'contrasena' => $contrasena]);

if ($resultado) {
    // Inicio de sesión exitoso, guardar información en la sesión
    $_SESSION['cedula'] = $cedula;
    
    // Redirigir a la página deseada después del inicio de sesión
    header('Location: inicio.php');
    exit();
} else {
    // El inicio de sesión no es válido, mostrar un mensaje de error o redirigir al usuario de vuelta al formulario
    echo "Usuario o contraseña incorrectos";
}
?>
