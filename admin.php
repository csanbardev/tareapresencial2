<?php
  session_start();
  if(!isset($_COOKIE['abiertaAdmin'])){
    if(!isset($_SESSION['iniciada'])||$_SESSION['tipo']!='admin'){
      header("Location: login.php?noiniciada");
    }else{
      $usuario = $_SESSION['usuario'];
    }
  }else{
    $usuario = $_COOKIE['abiertaAdmin'];
  }

  if(isset($_POST['submit'])){
    header("Location: {$_POST['pagina']}.php");
  }
?>

<?php require 'includes/head.php' ?>
<button type="submit"><a href="logout.php">Cerrar sesión</a></button>
<?php
  if($_COOKIE['contadorAdmin']==1){
    echo "<h1>Bienvenido por primera vez, {$usuario}</h1>";
  }else{
    echo "<h1>Hola de nuevo {$usuario}</h1>";
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