<?php
$nombre = $_GET['nombre'];
$contraseña = $_GET['contraseña'];

include("clase.php");
inicio::autenticar($nombre,$contraseña);

include_once("clase.php");
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['nombre'])) $_SESSION['nombre'] = '';
if(isset($_GET['nombre']) && isset($_GET['contraseña'])) {
    $nombre = $_GET['nombre'];
    $contraseña = $_GET['contraseña'];
    if(inicio::autenticar($nombre, $contraseña) >= 1) {
        $_SESSION['nombre'] = $nombre;
        header("location: seccion3.php");
        exit;  
    } else {
        header("location: out.html");
        exit; 
    }
}   else {
    echo "Error: Debes proporcionar usuario y contraseña." ;
    exit; 
}
?>