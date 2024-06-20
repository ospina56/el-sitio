<?php

class login{
    public static function registar($documento,$nombre,$apellido,$correo,$contraseña,$fecha){
        require("conexion.php");
        $salida= "";      
        $sql = "insert into tb_usuarios(documento,nombre,apellido,correo,contraseña,fecha)value('$documento','$nombre','$apellido','$correo','$contraseña','$fecha')";
        $consulta = $conexion ->query($sql);
        if($consulta){
            header("location:controlador.php?seccion=seccion6");
        } 
    }

    public static function mostrar(){
        require("conexion.php");
        $salida= "";
        $sql = "select * from tb_usuarios; ";
        $consulta = $conexion ->query($sql);
        while($fila = $consulta->fetch_assoc())
        {
            $salida.=$fila['documento']."<br>";
            $salida.=$fila['nombre']."<br>";
            $salida.=$fila['apellido']."<br>";
            $salida.=$fila['correo']."<br>";
            $salida.=$fila['contraseña']."<br>";
            $salida.=$fila['fecha']."<br> <br>";
        }
        return $salida;
    }
}

class inicio{
    public static function autenticar($nombre,$contraseña){
        require("conexion.php");
        $salida ="";
        $sql ="SELECT count(*) from tb_usuarios ";
        $sql .= "where nombre='$nombre' and contraseña='$contraseña'";
        $resultado = $conexion->query($sql);
        while($fila=$resultado->fetch_array()){
            $salida = $fila[0];
        }
        $conexion->close();
        return $salida; 
    }   
}

