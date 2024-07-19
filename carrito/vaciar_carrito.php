<?php
include 'conexion.php';
include 'clase_carrito.php';

session_start();

if (!isset($_SESSION['documento'])) {
    die("Usuario no autenticado");
}

$documento = $_SESSION['documento'];

Carrito::vaciarCarrito($documento);

header("Location: carrito.php");
exit();
?>


