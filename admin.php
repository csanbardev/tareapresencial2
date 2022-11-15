<?php
  session_start();
  if(!isset($_SESSION['iniciada'])&&$_SESSION['tipo']!='admin'){
    header("Location: login.php?noiniciada");
  }

  if(isset($_POST['submit'])){
    header("Location: {$_POST['pagina']}.php");
  }
?>


<?php
  if($_COOKIE['contadorAdmin']==1){
    echo "<h1>Bienvenido por primera vez, {$_SESSION['usuario']}</h1>";
  }else{
    echo "<h1>Hola de nuevo {$_SESSION['usuario']}</h1>";
    echo "<h2>Tu última visita fue el {$_COOKIE['ultimaVisitaAdmin']}</h2>";
    echo "<h2>Visitas: {$_COOKIE['contadorAdmin']}</h2>";
  }

?>

<h3>¿Qué quieres hacer?</h3>
<form action="admin.php" method="post">
  <select name="pagina" id="">
    <option value="a">A</option>
    <option value="b">B</option>
  </select>
  <input type="submit" value="Ir..." name="submit">
</form>