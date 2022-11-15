<?php
  session_start();
  if(!$_SESSION['iniciada']){
    header("Location: login.php?error=noiniciada");
  }else{ // redirige a la página principal de cada tipo
    header("Location: {$_SESSION['tipo']}.php");
  }

?>