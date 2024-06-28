<?php
include 'clase_carrito.php';

$id_carrito = $_POST['id_carrito'];

Carrito::eliminarproductocarrito($id_carrito);

header("Location: carrito.php");
exit();
?>
