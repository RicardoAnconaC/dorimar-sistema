<?php 
session_start(); 
   $session = $_SESSION['usuario'];
 if($session == null || $session == ''){
   header('location: login.html'); 
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
  <style>
      .text-white {
        color: #344767 !important;
      }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  bg-white " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="./assets/img/imagenes/dorimar.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Dorimar</span><!-- tiulo -->
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Menu</h6>
        </li>
          
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">........</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">.........</span>
          </a>
        </li>
       
        
       <!--  <li class="nav-item">
          <a class="nav-link text-white " href="./pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notificaciones</span>
          </a>
        </li> -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Cuenta</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white ">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Perfil</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="log" data-bs-toggle="modal" data-bs-target="#logaut">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1"> Cerrar sesión</span>
          </a>
        </li>
       
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <!-- <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="" type="button">boton</a>
      </div> -->
    </div>
  </aside>
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
    <style>
      .btn-secondary{
        background-color: #0077c2 !important;
      }
      
      .btn-secondary:hover{
        background-color: #42a5f5 !important;
      }

      .btn-primary{
        background-color: #1faa00 !important;
      }

      .btn-primary:hover{
        background-color: #64dd17 !important;
      }

      .btn-primary:active{
        background-color: #64dd17 !important;
      }

      .bg-headerTb{
        background-color: #42a5f5 !important;
      }
    </style>

    <div class="container-fluid">
    <!-- Modal -->
    <div class="modal fade" id="logaut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cerrar sesión</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            
            <a type="button" href="logout.php" class="btn btn-secondary"  >Salir</a>
          </div>
        </div>
      </div>
    </div>
    </div>
   

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-headerTb shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ordenes de compra</h6>
              </div>
            </div>
            
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">d1</th>
                      
                    </tr>
                  </thead>
                  <tbody>
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

    <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © 2021, <a href="" class="font-weight-bold" target="_blank">name empresa</a>
                
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
    </footer>
    

  </main>
 
  <div class="fixed-plugin">
  
          
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)" style="display: none;">White</button>
        
  </div>
  <!--   Core JS Files   -->
  
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>

 
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>

</body>

</html>