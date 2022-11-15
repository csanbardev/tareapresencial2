<?php
  require 'frmLogin.php';
  require 'includes/head.php';
?>


<form action="frmLogin.php" method="post">
  <label for="user">Usuario
    <input type="text" name="user" value=<?php echo isset($_COOKIE['usuario'])? $_COOKIE['usuario']:"" ?>>
  </label>
  <br>
  <label for="user">Contraseña
    <input type="text" name="password" value=<?php echo isset($_COOKIE['usuario'])? $_COOKIE['pass']:"" ?>>
  </label>
  <br>
  <label for="recordar">Recordar usuario
    <input type="checkbox" name="recordar" id="">
  </label>
  <br>
  <label for="sesion">Mantener sesión iniciada
    <input type="checkbox" name="abierta" id="">
  </label>
  <br>
  <br>
  <input type="submit" name="submit" value="Acceder">
</form>
  <br>
  <?php mostrarError() ?>

