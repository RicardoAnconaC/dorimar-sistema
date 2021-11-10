<?php 
session_start(); 

 if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != null && $_SESSION['usuario'] != ''){
   header('location: home.php'); 
   die();
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/login.css">

</head>

<body class="d-flex justify-content-center">

  <div class="d-flex align-items-center fadeInDown">
    <div class="shadow-lg  bg-white rounded py-4 px-5">
      <h3 class="fadeIn second ">Iniciar sesión</h3>

      <div class="fadeIn first py-4">
        <div class="row">
          <img src="assets/img/imagenes/dorimar.png" class="rounded mx-auto d-block col-lg-10" alt="img empresa">
        </div>
      </div>
      <div class="alert alert-danger py-2 text-center ocultar" role="alert">
        <p id="alerta" class="p-0 m-0">El nombre de usuario o contraseña son incorrectos</p>
      </div>
      <form action="session.php" method="POST">
        <div class="input-group mb-3 fadeIn second">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
          <input name="usuario" type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-1 fadeIn second">
          <span class="input-group-text " id="basic-addon1"><i class="bi bi-key-fill"></i></span>
          <input type="password" name='password' class="form-control" placeholder="Contraseña" required>
        </div> <a class="fadeIn second" href="#" id="olvidaste">¿Olvidaste tu contraseña?</a>
        <div class="d-flex justify-content-end fadeIn second">
          <input type="submit" name='submit' class="btn btn-outline-success" value='Iniciar'></input>
        </div>
      </form>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>