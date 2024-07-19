<?php
include '../conexion.php';
include 'clase_carrito.php';

session_start();

if (!isset($_SESSION['contraseña'])) {
    die("Usuario no autenticado");
}

if (isset($_POST['id_producto']) && isset($_POST['cantidad'])) {
    $contraseña = $_SESSION['contraseña'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];

    Carrito::agregarcarrito($contraseña, $id_producto, $cantidad);
    
    header("Location: carrito.php");
    exit();
} else {
    echo "Faltan datos para agregar el producto al carrito.";
}
?>
        




