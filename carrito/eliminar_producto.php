<?php
include 'conexion.php';
include 'clase_carrito.php';

session_start();

if (!isset($_SESSION['documento'])) {
    die("Usuario no autenticado");
}

if (isset($_POST['id_carrito'])) {
    $id_carrito = $_POST['id_carrito'];

    Carrito::eliminarproductocarrito($id_carrito);
    
    header("Location: carrito.php");
    exit();
} else {
    echo "Faltan datos para eliminar el producto del carrito.";
}
?>

