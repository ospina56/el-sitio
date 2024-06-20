<head>
    <title><?php echo"mostrar"; ?></title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MVLS4GJG3K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MVLS4GJG3K');
</script>
<div class="row">
<?php 
include("clase.php");
echo(login::mostrar())
?>

</div>