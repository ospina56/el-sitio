<?php
session_start();
?>

<?php
$_SESSION['R']=0;
$_SESSION['base']=100;
$_SESSION['altura']=5;

$_SESSION['R']=$_SESSION['base']*$_SESSION['altura']/2;
echo $_SESSION['R'];
?>
