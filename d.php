<?php
  session_start();
  if(!isset($_COOKIE['abiertaUser'])){
    if(!isset($_SESSION['iniciada'])||$_SESSION['tipo']!='user'){
      header("Location: login.php?noiniciada");
    }
  }

?>
<?php require 'includes/head.php' ?>
<h1>Opción D</h1>
<button type="submit"><a href="user.php">Volver</a></button>