<?php
class Carrito {
    public static function agregarcarrito($documento, $id_producto, $cantidad) {
        include 'conexion.php';
        
        $sql = "SELECT id_carrito, cantidad FROM carrito WHERE documento=$documento AND id_producto=$id_producto";
        $result = $conexion->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nuevacantidad = $row['cantidad'] + $cantidad;
            $sql = "UPDATE carrito SET cantidad=$nuevacantidad WHERE id_carrito=" . $row['id_carrito'];
            $conexion->query($sql);
        } else {
            $sql = "INSERT INTO carrito (documento, id_producto, cantidad) VALUES ($documento, $id_producto, $cantidad)";
            if ($conexion->query($sql) === TRUE) {
                echo "Producto agregado al carrito.";
            } else {
                echo "Error al agregar el producto al carrito: " . $conexion->error;
            }
        }
        
        $conexion->close();
    }

    public static function actualizarcantidadcarrito($id_carrito, $nuevacantidad) {
        include 'conexion.php';
        $sql = "UPDATE carrito SET cantidad = $nuevacantidad WHERE id_carrito = $id_carrito";
        $conexion->query($sql);
        $conexion->close();
    }

    public static function eliminarproductocarrito($id_carrito) {
        include 'conexion.php';
        $sql = "DELETE FROM carrito WHERE id_carrito = $id_carrito";
        $conexion->query($sql);
        $conexion->close();
    }

    public static function mostrarcarrito($documento) {
        include 'conexion.php';
        $sql = "SELECT c.id_carrito, p.nombre, p.precio, c.cantidad FROM carrito c INNER JOIN productos p ON c.id_producto = p.id_producto WHERE c.documento = $documento";
        $result = $conexion->query($sql);

        if (!$result) {
            die("Error en la consulta: " . $conexion->error);
        }

        $contenidocarrito = array();
        while ($row = $result->fetch_assoc()) {
            $contenidocarrito[] = $row;
        }
        
        $conexion->close();
        return $contenidocarrito;
    }

    public static function totalcarrito($documento) {
        include 'conexion.php';
        $sql = "SELECT SUM(p.precio * c.cantidad) AS total FROM carrito c INNER JOIN productos p ON c.id_producto = p.id_producto WHERE c.documento = $documento";
        $result = $conexion->query($sql);

        if (!$result) {
            die("Error en la consulta: " . $conexion->error);
        }

        $row = $result->fetch_assoc();
        $total = $row['total'];
        
        $conexion->close();
        return $total;
    }

    public static function vaciarCarrito($documento) {
        include 'conexion.php';
        $sql = "DELETE FROM carrito WHERE documento = $documento";
        $conexion->query($sql);
        $conexion->close();
    }
}
?>

