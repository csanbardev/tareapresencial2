<?php
  session_start();
  if(!isset($_COOKIE['abiertaAdmin'])){
    if(!isset($_SESSION['iniciada'])||$_SESSION['tipo']!='admin'){
      header("Location: login.php?noiniciada");
    }
  }

?>

<h1>Opción B</h1>
<button type="submit"><a href="admin.php">Volver</a></button>