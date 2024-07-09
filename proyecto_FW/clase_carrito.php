<?php
class Carrito {
    public static function agregarcarrito($id_usuario, $id_producto, $cantidad) {
        include 'conexion.php';
        $sql = "SELECT id_carrito, cantidad FROM carrito WHERE documento=$documento AND id_producto=$id_producto";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nuevacantidad = $row['cantidad'] + $cantidad;
            $query = "UPDATE carrito SET cantidad=$nuevacantidad WHERE id_carrito=" . $row['id_carrito'];
            $conexion->query($query);
        } else {
            $query = "INSERT INTO carrito (documento, id_producto, cantidad) VALUES ($documento, $id_producto, $cantidad)";
            $conexion->query($query);
        }
    }

    public static function actualizarcantidadcarrito($id_carrito, $nuevacantidad) {
        include 'conexion.php';
        $query = "UPDATE carrito SET cantidad = $nuevacantidad WHERE id_carrito= $id_carrito";
        $conexion->query($query);
    }

    public static function eliminarproductocarrito($id_carrito) {
        include 'conexion.php';
        $query = "DELETE FROM carrito WHERE id_carrito= $id_carrito";
        $conexion->query($query);
    }

    public static function mostrarcarrito($id_usuario) {
        include 'conexion.php';
        $query = "SELECT c.id_carrito, p.nombre, p.precio, c.cantidad FROM carrito c INNER JOIN productos p ON c.id_producto = p.id_producto WHERE c.documento = $documento";
        $result = $conexion->query($query);

        if (!$result) {
            die("Error en la consulta: " . $conexion->error);
        }

        $contenidocarrito = array();
        while ($row = $result->fetch_assoc()) {
            $contenidocarrito[] = $row;
        }
        return $contenidocarrito;
    }

    public static function totalcarrito($documento) {
        include 'conexion.php';
        $query = "SELECT SUM(p.precio * c.cantidad) AS total FROM carrito c INNER JOIN productos p ON c.id_producto= p.id_producto WHERE c.documento=$documento";
        $result = $conexion->query($query);

        if (!$result) {
            die("Error en la consulta: " . $conexion->error);
        }

        $row = $result->fetch_assoc();
        return $row['total'];
    }

    public static function vaciarCarrito() {
        // $_SESSION['carrito'] = array();
        $_SESSION['carrito'] = "";
    }

    public static function verificarProductoCarrito($id_producto) {
        return isset($_SESSION['carrito']['$id_producto']);
    }
}
?>
