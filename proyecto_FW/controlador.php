<?php
  $seccion = "seccion1";
  $seccion = "seccion2";
  $seccion = "seccion3"; 
  $seccion = "seccion4";
  $seccion = "seccion5";
  $seccion = "seccion6";
  $seccion = "seccion8";
  $seccion = "seccion9"; 
  $index= "index.php";

  if( isset( $_GET[ 'seccion' ] ) ){
    $seccion = $_GET[ 'seccion' ];
  }
  //echo $seccion;

  include( "plantilla.php" );
  
?>

