<?php 
    session_start();
    $_SESSION['usuario'] = NULL;
    session_destroy();
    header("Location: login.html ");
?>