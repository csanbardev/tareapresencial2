<?php
  session_start();
  if(!isset($_COOKIE['abiertaUser'])){
    if(!isset($_SESSION['iniciada'])||$_SESSION['tipo']!='user'){
      header("Location: login.php?noiniciada");
    }
  }

?>
<?php require 'includes/head.php' ?>
<button type="submit"><a href="logout.php">Cerrar sesión</a></button>
<h1>Opción D</h1>
<button type="submit"><a href="user.php">Volver</a></button>