<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="css/stylecar.css">
</head>
<body>
    <center><h1>Carrito de Compras</h1><br></center>
    <?php
    session_start();
    include 'clase_carrito.php';

    if (!isset($_SESSION['documento'])) {
        die("Usuario no autenticado");
    }

    $documento = $_SESSION['documento'];

    $carrito = Carrito::mostrarcarrito($documento);
    $total = Carrito::totalcarrito($documento);

    if (count($carrito) > 0) {
        foreach ($carrito as $item) {
            echo "<div class='carrito-item'>";
            echo "<div>";
            echo "<p><strong>" . htmlspecialchars($item['nombre']) . "</strong></p>";
            echo "<p><strong>Precio: $</strong>" . htmlspecialchars($item['precio']) . "</p>";
            echo "<p><strong>Cantidad: </strong>" . htmlspecialchars($item['cantidad']) . "</p>";
            echo "</div>";
            echo "<form action='eliminar_producto.php' method='POST'>";
            echo "<input type='hidden' name='id_carrito' value='" . htmlspecialchars($item['id_carrito']) . "'>";
            echo "<input type='submit' class='boton eliminar' value='Eliminar'>";
            echo "</form>";
            echo "</div>";
        }
        echo "<p><strong>Total: $</strong>" . htmlspecialchars($total) . "</p>";
        echo "<a href='vaciar_carrito.php' class='boton'>Vaciar Carrito</a>";
    } else {
        echo "<p>El carrito está vacío.</p>";
    }
    ?>
</body>
</html>



