<?php
include 'clase_carrito.php';

Carrito::vaciarCarrito();

header("Location: carrito.php");
exit();
?>
