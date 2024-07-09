<?php
  $seccion = "seccion1";

  
  if( isset( $_GET[ 'seccion' ] ) ){
    $seccion = $_GET[ 'seccion' ];
  }
  //echo $seccion;

  include( "plantilla.php" );
?>

