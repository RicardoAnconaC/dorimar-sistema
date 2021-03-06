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


  
  <style>
  
  </style>
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

                <span class="d-sm-inline d-none">Cerrar sesi??n</span>
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
   
    <div class="container-fluid" >
    <!-- Modal -->
      <div class="modal fade" id="logaut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cerrar sesi??n</h5>
              <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
              <button type="button" name='cerrar' class="text-secondary button"  data-bs-dismiss="modal"  aria-label="Close" ><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              
              <form action="session.php" method="POST">
                <input type="submit" name='submit' class="btn btn-secondary m-0" value='Confirmar'></input>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <div class="container-fluid py-4" id="main">
      <div class="row">
       
        <div class="col-12">
          <div class="card my-4">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 ">
              <div class="bg-headerTb shadow-primary border-radius-lg pt-0 pb-0 px-2">
                
                <div class="d-flex align-items-center py-3">
                  <div class=" flex-grow-1 bd-highlight ">
                    <h6 class="text-white text-capitalize p-0 m-0">FACTURAS INGRESADAS</h6>
                  </div>
                  <!-- <div class="p-2 bd-highlight">
                    <div class="input-group input-group-outline">
                      <label class="form-label">Filtro:</label>
                      <input name="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" required>
                    </div>

                  </div>
                  <div class="p-2 bd-highlight ">
                    <input type="" name='' class="btn btn-primary btn-sm  m-0" value='Agregar Factura'></input>
                  </div> -->
         
                </div>
                
              </div> 
             
            </div>
            
            <div class="card-body px-0 pb-2">
            <div class="d-flex align-items-center px-3">
                  <div class=" flex-grow-1 bd-highlight px-2 ">
                    <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group btn-group-sm " role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary mt-0 mb-0"><i class="bi bi-file-earmark-excel" style="font-size: 1.3em; paddin:12px;"></i></button>
                        <button type="button" class="btn btn-secondary mt-0 mb-0"><i class="bi bi-file-earmark-pdf" style="font-size: 1.3em;"></i></button>
                        <button type="button" class="btn btn-secondary mt-0 mb-0"><i class="bi bi-printer" style="font-size: 1.3em;"></i></button>
                        <!-- <button type="button" class="btn btn-outline-secondary mt-0 mb-0">4</button> -->
                      </div>
                      
                    </div>
                  </div>
                  
                  <div class="p-2 bd-highlight">
                    <div class="input-group input-group-outline">
                      <label class="form-label"><i class="bi bi-search"></i>&nbsp;Buscar  </label>
                      <input name="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                  <div class="p-2 bd-highlight ">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle m-0" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Meses</a>

                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Enero</a></li>
                        <li><a class="dropdown-item" href="#">Febrero</a></li>
                        <li><a class="dropdown-item" href="#">Marzo</a></li>
                        <li><a class="dropdown-item" href="#">Abril</a></li>
                        <li><a class="dropdown-item" href="#">Mayo</a></li>
                        <li><a class="dropdown-item" href="#">Junio</a></li>
                        <li><a class="dropdown-item" href="#">Julio</a></li>
                        <li><a class="dropdown-item" href="#">Agosto</a></li>
                        <li><a class="dropdown-item" href="#">Septiembre</a></li>
                        <li><a class="dropdown-item" href="#">Octubre</a></li>
                        <li><a class="dropdown-item" href="#">Noviembre</a></li>
                        <li><a class="dropdown-item" href="#">Diciembre</a></li>
                      </ul>
                    </div>
                    
                  </div>
                  <div class="p-2 bd-highlight ">
                    <a type="button" href="formFactura.php" class="btn btn-secondary btn-sm shadow-sm m-0"title="Agregar nueva factura" ><i style="font-size: 1.3em;"class="bi bi-plus-circle"></i></a>
                    
                  </div>
                </div>
                
                <hr>

              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr class="text-center">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Serie-Folio</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha Emisi??n</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha vencimiento</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RFC receptor</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre receptor</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subtotal</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Imp. Trasladados</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pagos</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pagado</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Saldo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PDF</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">XML</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DIAS TRANSCURRIDOS</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <td class="">
                        <p class="text-xs font-weight-bold mb-0">A-504</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">08/02/2021</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">10/03/2021</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">CSM171201JW0</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">HARREN & PARTNER OFFSHORE MEXICO SAPI DE CV</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">$ 127,250.00</p>
                      </td>
                      
                      <td>
                        <p class="text-xs font-weight-bold mb-0"> $ 20,360.00 </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"> $ 147,610.00 </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">1</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">1</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"> $147,610.00 </p>
                      </td>
                      <td>
                        <div class="spinner-grow spinner-grow-sm bg-danger" role="">
                          
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"></p>
                      </td>
                    </tr>
                    <tr>
                      <td class=" ">
                        <p class=" text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ?? 2021, <a href="" class="font-weight-bold" target="_blank">name empresa</a>
                
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                
                <li class="nav-item">
                  <a href="" class="nav-link pe-0 text-muted" target="_blank">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link pe-0 text-muted" target="_blank">Licencia</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </footer> -->
    

  </main>
 
  
  <!--   Core JS Files   -->

  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  <script async defer src="./assets/js/proyecto-js.js"></script>
  
  
  
  

</body>

</html>