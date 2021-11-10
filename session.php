<?php 

    session_start();

    include_once('serv-logIn.php');

    function logout() {
      session_start();
      $_SESSION['usuario'] = NULL;
      session_destroy();
      header("Location: login.php ");
    }

    if($_POST['submit'] === 'Iniciar') {
      login();
    }

    if($_POST['submit'] === 'Salir') {
      logout();
    }
?>