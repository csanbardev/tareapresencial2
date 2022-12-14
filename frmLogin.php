<?php
  session_start();

  if(isset($_POST['submit'])){

    // el usuario es un administrador
    if($_POST['user']=='admin'&&$_POST['password']=='admin'){
      $_SESSION['iniciada']=true;
      $_SESSION['tipo']="administrador";
      $_SESSION['usuario']=$_POST['user'];

      // si recordar está pulsado, guarda las credenciales
      if(isset($_POST['recordar'])){ 
        setcookie("usuario", $_POST['user'], time()+64*64*24*365);
        setcookie("pass", $_POST['password'], time()+64*64*24*365);
      }
      
      // si pide mantener la sesión abierta
      if(isset($_POST['abierta'])){
        setcookie("abiertaAdmin", $_POST['user'], time()+64*64*24*365);
      }


      if(!isset($_COOKIE['primeraVisitaAdmin'])){ // si no ha habido una primera visita, la creará
        setcookie("primeraVisitaAdmin", date('d-m-Y'), time()+64*64*24*365);
        setcookie("contadorAdmin", 1, time()+64*64*24*365);
      }else{
        setcookie("ultimaVisitaAdmin", $_COOKIE['visitaActualAdmin'], time()+64*64*24*365);
        setcookie("contadorAdmin", $_COOKIE['contadorAdmin']++, time()+64*64*24*365);
      }
      setcookie("visitaActualAdmin", date('d-m-Y'), time()+64*64*24*365);
      
      header("Location:admin.php");
      
      // el usuario es un usuario común
    }elseif($_POST['user']=="user"&&$_POST['password']=="user"){
      $_SESSION['iniciada']=true;
      $_SESSION['tipo']="user";
      $_SESSION['usuario']=$_POST['user'];

      // si recordar está pulsado, guarda las credenciales
      if(isset($_POST['recordar'])){ 
        setcookie("usuario", $_POST['user'], time()+64*64*24*365);
        setcookie("pass", $_POST['password'], time()+64*64*24*365);
      }

      // si pide mantener la sesión abierta
      if(isset($_POST['abierta'])){
        setcookie("abiertaUser", $_POST['user'], time()+64*64*24*365);
      }

      if(!isset($_COOKIE['primeraVisitaUser'])){ // si no ha habido una primera visita, la creará
        setcookie("primeraVisitaUser", date('d-m-Y'), time()+64*64*24*365);
        setcookie("contadorUser", 1, time()+64*64*24*365);
      }else{
        setcookie("ultimaVisitaUser", $_COOKIE['visitaActualUser'], time()+64*64*24*365);
        setcookie("contadorUser", $_COOKIE['contadorUser']++, time()+64*64*24*365);
      }
      setcookie("visitaActualUser", date('d-m-Y'), time()+64*64*24*365);

      header("Location:user.php");
    }else{
      header("Location: login.php?error=credenciales");
    }
  }



  function mostrarError(){
    if(isset($_GET['error'])){
      if($_GET['error']=='noiniciada'){
        echo "<br><div class='alert alert-danger'>Inicia sesión primero</div>";
      }
      if($_GET['error']=='credenciales'){
        echo "<br><div class='alert alert-danger'>Credenciales incorrectas</div>";
      }
    }
    
  }
?>


