<?php

  //Podría haber código PHP pero se vería en todas las secciones.

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="index.php">FASHION WORLD</a>
      <div class="nav-collapse collapse" style="height: 0px;">
        <ul class="nav">
          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menú <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Categorías  <img src="imagenes\logo-categorias.jpg" height="30px" width="30px"></a></li>
              <li><a href="seccion8.php">Tus favoritos  <img src="imagenes\icono-corazon.jpg" height="30px" width="30px"></a></li>
              <li><a href="#">Tu lista de deseos  <img src="imagenes/deseos.png" height="30px" width="30px"></a></li>
              <li><a href="seccion9.php">Carrito <img src="imagenes/anadir-al-carrito (1).png" height="30px" width="30px"></a></li>
              <li><a href="#">Fechas especiales <img src="imagenes/fecha-especial.png" height="30px" width="30px"></a></li>
              <li><a href="#">Mi perfil <img src="imagenes/perfil.jpg" height="30px" width="30px"></a></li>
              </ul>
          </li>
          <li><a href="controlador.php?seccion=seccion1">iniciar sesión</a></li>
          <li><a href="controlador.php?seccion=seccion2">Registrarse</a></li>
          <li><a href="controlador.php?seccion=seccion3">Saludo</a></li>
          <li><a href="controlador.php?seccion=seccion4">presentación</a></li>
          <li><a href="controlador.php?seccion=seccion5">nosotros</a></li>
          <li><a href="controlador.php?seccion=seccion6">ver</a></li>
          <li><a href="https://www.sena.edu.co" target="blank">Ir al Sena</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

</body> 
    <!-- Se declara un contenedor fila y después un contenedor columna. LAs columnas deben sumar 12, según la rejilla Bootstrap. -->
    <div class="container">
<?php 
include ("$seccion.php"); 
?>
    </div>

    <div class="container">
      <footer>
        <p>© Company 2012</p>
      </footer>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  
<!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MW395SN41J"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-MW395SN41J');
        </script>
</body></html>