<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <style>
        .carrito-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .carrito-item img {
            max-width: 100px;
        }
        .boton {
            color: white;
            padding: 10px 20px;
            background-color: #4CAF50;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .boton.eliminar {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <center><h1>Carrito de Compras</h1><br></center>
    <?php
    include 'clase_carrito.php';

    $documento = 123; // ID de usuario fijo para este ejemplo
    $carrito = Carrito::mostrarcarrito($documento);
    $total = Carrito::totalcarrito($documento);

    if (count($carrito) > 0) {
        foreach ($carrito as $item) {
            echo "<div class='carrito-item'>";
            echo "<div>";
            echo "<p><strong>" . $item['nombre_producto'] . "</strong></p>";
            echo "<p><strong>Precio: $</strong>" . $item['precio'] . "</p>";
            echo "<p><strong>Cantidad: </strong>" . $item['cantidad'] . "</p>";
            echo "</div>";
            echo "<form action='eliminar_producto.php' method='POST'>";
            echo "<input type='hidden' name='id_carrito' value='" . $item['id_carrito'] . "'>";
            echo "<input type='submit' class='boton eliminar' value='Eliminar'>";
            echo "</form>";
            echo "</div>";
        }
        echo "<p><strong>Total: $</strong>" . $total . "</p>";
        echo "<a href='vaciar_carrito.php' class='boton'>Vaciar Carrito</a>";
    } else {
        echo "<p>El carrito está vacío.</p>";
    }
    ?>
</body>
</html>
