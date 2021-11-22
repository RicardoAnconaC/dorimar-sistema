<?php 
session_start(); 

   $session = $_SESSION['usuario'];
 if($session == null || $session == ''){
   header('location: login.php'); 
   die();
 }

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  
  <title>
    Home
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">



  
</head>

<body class="g-sidenav-show  bg-gray-200">
<?php include "navegacion.php" ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0"></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
          <ul class="navbar-nav  justify-content-end">


          
           
            <!-- <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-sign-out me-sm-1" ></i>

                <span class="d-sm-inline d-none">Cerrar sesión</span>
              </a>
            </li> -->
            <li class="nav-item d-xl-none ps-3 px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item  px-1 d-flex align-items-center">
              
            </li>
            <!-- notificaciones -->
            <!-- <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- notificaciones end -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


   
   
    <div class="container-fluid py-4" id="main">
      <div class="row">
       
        <div class="col-12">
          <div class="card my-4 ">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 ">
              <div class="bg-headerTb shadow-primary border-radius-lg pt-0 pb-0 px-2">
                
                <div class="d-flex align-items-center py-3">
                  <div class=" flex-grow-1 bd-highlight ">
                    <h6 class="text-white text-capitalize p-0 m-0">SUBIR FACTURA</h6>
                  </div>
                </div>
                
              </div> 
             
            </div>
            
            <div class="card-body px-0 pb-2">
            <div class="d-flex align-items-center px-3">
              <div class=" flex-grow-1 bd-highlight px-2 "></div>
              <div class="p-2 bd-highlight"></div>
              <div class="p-2 bd-highlight "></div>
                <div class="p-2 bd-highlight ">
                  <a type="button" href="home.php" class="btn btn-secondary btn-sm shadow-sm m-0"title="Agregar nueva factura" ><i class="bi bi-house-door" style="font-size: 1.3em;"></i></a>
                    
                </div>
              </div>
              <hr>
              <div class="container">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="input-group input-group-outline ">
                    <label for="start" class="form-label">Start date:</label>
                    <input class="form-control" type="date" id="start" name=""
                        value=""
                         min="" max="">
                      <!-- <label class="form-label"><i class="bi bi-search"></i>&nbsp;Buscar  </label>
                      <input name="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" required> -->
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="input-group input-group-outline">
                    
                      <label class="form-label">Pagos</label>
                      <input name="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                  
                </div>
              
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
     // Cuando cambia un input date me borra los espacios
      $('[type=date]').change( function() {
        $(this).css('white-space','normal')
      });

      
    
    </script>
    <style>
    /* Hago que el navegador no me reemplace los espacios en blanco por uno solo */
  input[type="date"]{
   white-space: pre;
  }
  /* placeholder de espacios en blanco */
  input[type="date"]::before{
   content: attr(placeholder) "";
  }
  /* Cuando se enfoca que no esten los espacios en blanco */
  input[type="date"]:focus::before {
     content: "" !important;
  }
    </style>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <div class="container-fluid py-4" id="main">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-headerTb shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Subir factura</h6>
              </div>
            </div>

            <div class="container">
              <form action="recibeFacturas.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 d-flex flex-column">
                    <div class="card card-plain">
                      <div class="card-body">

                        <div class="input-group input-group-outline mb-3 d-flex flex-column">
                          <label for='pdf-upload' class="text-uppercase font-weight-bold" style='color:#EC407A;font-size:1.1rem;'>Subir PDF</label>
                          <input type="file" id="pdf-upload" name="pdf-upload" accept="application/pdf" />
                        </div>

                        <div class="input-group input-group-outline mb-3 d-flex flex-column">
                          <label for='xml-upload' class="text-uppercase font-weight-bold" style='color:#EC407A;font-size:1.1rem;'>Subir XML</label>
                          <input type="file" id="xml-upload" name="xml-upload" accept="application/xml" class="form-control w-100"/>
                        </div>

                        

                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 d-flex flex-column">
                    <div class="card card-plain">
                      <div class="card-body">
                        <!-- <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Name</label>
                          <input type="text" class="form-control">
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-3 mx-auto">
                    <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="Subir" />
                  </div>
                </div>
              </form>
            </div>


          </div>
        </div>
      </div>
    </div>

    

    

  </main>
 
  

  <style>
    footer{ position:fixed; bottom:0px}
    footer{ position:relative;}

  </style>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script async defer src="./assets/js/proyecto-js.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
       footer = function(){ 
     /*el alto que tiene el navegador*/
     $alto_navegador= $(window).height();
     /*el alto que tiene el contenido de la pagina*/
     $alto_documento= $(document).height(); 
     /*  aqui condicionamos si el alto del contenido 
      *  es mayor que
      *  el alto del navegador*/
     if ($alto_documento>$alto_navegador)
     {
         /* si es mayor es que tiene un contenido mas 
          * largo que el alto del navegador y entonces lo dejamos a relativo*/
         $("footer").css({"position":"relative"})
         console.log("relative");
     }
     else
     {
         /* si el alto del contenido es menor que el alto del navegador es que
          * tenemos espacio vacio y le mandamos abajo*/
         $("footer").css({"position":"fixed"})
         console.log("fixed");
     } 
 
 }
 footer();
      </script> -->
 
  
  
  

</body>

</html>