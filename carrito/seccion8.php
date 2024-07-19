<head>
    <link rel="stylesheet" type="text/css" href="css/styleFavo.css">
    <title><?php echo 'Tus favoritos'; ?></title>
<body>
    <center><h1>Productos</h1><br></center>
    <?php
    include '../conexion.php';
    $sql = "SELECT * FROM tb_productos";
    $consulta = $conexion->query($sql);

    if ($consulta->num_rows > 0) {
        while ($row = $consulta->fetch_assoc()) {
            echo "<div class='favoritos'>";
            echo "<img src='" . $row['img'] . "' alt='" . $row['producto'] . "'>";
            echo "<p><strong>" . $row['producto'] . "</strong></p>"; 
            echo "<p><strong>Descripción:</strong> " . $row['detalles'] . "</p>"; 
            echo "<p><strong>Precio: $</strong>" . $row['precio'] . "</p>";
            echo "<form action='agregar_carrito.php' method='POST'>";
            echo "<input type='hidden' name='id_producto' value='" . $row['id_producto'] . "'>";
            echo "<input type='number' name='cantidad' value='1' min='1'>";
            echo "<input type='submit' class='boton' value='Agregar al carrito'>";
            echo "</form>";
            echo "</div>";
        }
    }
    ?>
</body>
</head>

