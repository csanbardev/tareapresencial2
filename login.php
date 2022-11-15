<?php
  require 'frmLogin.php';
?>


<form action="frmLogin.php" method="post">
  <label for="user">Usuario
    <input type="text" name="user">
  </label>
  <br>
  <label for="user">Contraseña
    <input type="text" name="password">
  </label>
  <br>
  <label for="recordar">Recordar usuario
    <input type="checkbox" name="recordar" id="">
  </label>
  <br>
  <label for="sesion">Mantener sesión iniciada
    <input type="checkbox" name="iniciada" id="">
  </label>
  <br>
  <br>
  <input type="submit" name="submit" value="Acceder">
</form>