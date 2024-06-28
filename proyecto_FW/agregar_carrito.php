<?php
include 'clase_carrito.php';

$id_usuario = 1; // ID de usuario fijo para este ejemplo. En una aplicación real, este valor debe ser dinámico, generalmente basado en la sesión del usuario.
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];

Carrito::agregarcarrito($id_usuario, $id_producto, $cantidad);

header("Location: carrito.php");
exit();
?>
