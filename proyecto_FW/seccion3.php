
<head>
    <title><?php echo"saludo"; ?></title>
</head>
<?php

if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['nombre']) || $_SESSION['nombre'] === '') {
    header("location: out.html");
    exit; // Asegúrate de salir del script después de redirigir
}
$nombre = $_SESSION['nombre']; // Guarda el nombre de usuario en una variable
?>

<!DOCTYPE html>
<html lang="es">

<head> 
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        h1 {
            color: black;
        } 
    </style>
</head>

<body>
    <h1><center>Bienvenid@ <?php echo $nombre; ?></center></h1> <!-- Imprime el nombre del usuario -->
</body>

</html>
