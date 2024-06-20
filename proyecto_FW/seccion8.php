<head>
    <title><?php echo 'Tus favoritos'; ?></title>
<style>
    .favoritos {
    width: 200px; 
    margin-right: 20px;
    float: left;
    margin-bottom: 20px;
    text-align: center; 
}
.favoritos img {
    width: 100%; 
    height: auto;
}

.boton {
    color: black;
    padding: 10px 20px;
    background-color: #4CAF50;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    margin-bottom: 20px; 
}
</style>
</head>
<CENTER><h1>Tus favoritos</h1><br></CENTER>
<?php
include 'conexion.php';
$salida="";
$sql = "SELECT * FROM tb_favoritos";
$consulta = $conexion->query($sql);

if ($consulta->num_rows > 0) {
    while ($row= $consulta->fetch_assoc()) {
        echo "<div class='favoritos'>";
        echo "<img src='" . $row['img'] . "' alt='" . $row['producto'] . "'>"; 
        echo "<p><strong>" . $row['detalles'] . "</strong></p>"; 
        echo "<p><strong>Precio: $</strong>" . $row['precio'] . "</p>";
        echo '<a href="seccion9.php" class="boton" data-id_producto="$id_producto">Agregar al carrito</a>';
        echo "</div>";
    }
}

