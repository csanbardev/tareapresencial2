<?php
  session_start();
  if(isset($_COOKIE['abiertaAdmin'])){
    header("Location: admin.php");
  }elseif(isset($_COOKIE['abiertaUser'])){
    header("Location: user.php");
  }
  elseif(!$_SESSION['iniciada']){
    header("Location: login.php");
  }else{ // redirige a la página principal de cada tipo
    header("Location: {$_SESSION['tipo']}.php");
  }

?>