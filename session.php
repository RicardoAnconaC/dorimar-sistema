<?php 

    session_start();

    include_once('serv-logIn.php');

    function logout() {
      $_SESSION['usuario'] = NULL;
      session_destroy();
      header("Location: login.php ");
    }

    if($_POST['submit'] === 'Iniciar') {
      login();
      die();
    }

    if($_POST['submit'] === 'Confirmar') {
      logout();
      die();
    }

    if($_POST['enviar'] === 'Enviar') {
        solicitarPassword();
        die();
    }

    if($_POST['guardar'] === 'Guardar'){
      if($_POST['password'] === $_POST['conPassword']){
        saveNewPassword();
      }else{
        header("Location: recuperarPassword.php?tk=".$_POST['token']);
        die();
      }
    }

    if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != null && $_SESSION['usuario'] != ''){
      header('location: home.php'); 
      die();
    }else{
      header('location: login.php'); 
      die();
    }


?>