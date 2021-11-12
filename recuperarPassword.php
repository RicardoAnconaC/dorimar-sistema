<?php 
  $token = $_GET['tk'];//resivir el token
  if(empty($token)){
    header('location: index.html'); 
    die();
  }
  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar tu contraseña</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="./assets/css/main.css"> -->
  <link rel="stylesheet" href="./assets/css/login.css">

</head>

<body class="d-flex justify-content-center">

  <div class="container my-auto fadeInDown">
    <div class="row">
      <div class="col-lg-4 col-md-8 col-sm-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="d-flex justify-content-center fadeIn second mt-3">
            <h5 class="modal-title" id="exampleModalLabel">Recuperar tu contraseña</h5>
          </div><hr class="second">
          <div class="card-body">
            <!-- <div class="row d-flex justify-content-center fadeIn second p-0 mb-5">
              <img src="assets/img/imagenes/dorimar.png" class="img-circle  d-block col-lg-6 col-md-5 col-sm-5 col-6 px-3 m-0" alt="img empresa" width="100%" height="auto">
            </div> -->
            <form action="session.php" method="POST">
              
                <input type="hidden" name="token" value=<?php echo $token ?>>
              <div class="input-group input-group-outline mt-0 mb-1 fadeIn second">
                <label class="form-label">Contraseña:</label>
                <input type="password" name='password' class="form-control" placeholder="" required>
              </div> 

              <div class="input-group input-group-outline mt-3 mb-1 fadeIn second">
                <label class="form-label">Confirmar contraseña:</label>
                <input type="password" name='conPassword' class="form-control" placeholder="" required>
              </div> 
                
              
                
              <div class="d-flex justify-content-center fadeIn second mt-3">
                <input type="submit" name='guardar' class="btn  w-50 my-4 btn-secondary" value='Guardar'></input>
              </div>
            </form>

          </div>  
            
        </div>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script>
   


   // when input is focused add focused class for style
   function focused(el) {
     if (el.parentElement.classList.contains('input-group')) {
       el.parentElement.classList.add('focused');
     }
   }

   // when input is focused remove focused class for style
   function defocused(el) {
     if (el.parentElement.classList.contains('input-group')) {
       el.parentElement.classList.remove('focused');
     }
   }

   // helper for adding on all elements multiple attributes
   function setAttributes(el, options) {
     Object.keys(options).forEach(function(attr) {
       el.setAttribute(attr, options[attr]);
     })
   }

   // adding on inputs attributes for calling the focused and defocused functions
   if (document.querySelectorAll('.input-group').length != 0) {
     var allInputs = document.querySelectorAll('input.form-control');
     allInputs.forEach(el => setAttributes(el, {
       "onfocus": "focused(this)",
       "onfocusout": "defocused(this)"
     }));
   }



   // End tabs navigation

   window.onload = function() {
     // Material Design Input function
     var inputs = document.querySelectorAll('input');

     for (var i = 0; i < inputs.length; i++) {
       inputs[i].addEventListener('focus', function(e) {
         this.parentElement.classList.add('is-focused');
       }, false);

       inputs[i].onkeyup = function(e) {
         if (this.value != "") {
           this.parentElement.classList.add('is-filled');
         } else {
           this.parentElement.classList.remove('is-filled');
         }
       };

       inputs[i].addEventListener('focusout', function(e) {
         if (this.value != "") {
           this.parentElement.classList.add('is-filled');
         }
         this.parentElement.classList.remove('is-focused');
       }, false);
     }

     // Ripple Effect
     var ripples = document.querySelectorAll('.btn');

     for (var i = 0; i < ripples.length; i++) {
       ripples[i].addEventListener('click', function(e) {
         var targetEl = e.target;
         var rippleDiv = targetEl.querySelector('.ripple');

         rippleDiv = document.createElement('span');
         rippleDiv.classList.add('ripple');
         rippleDiv.style.width = rippleDiv.style.height = Math.max(targetEl.offsetWidth, targetEl.offsetHeight) + 'px';
         targetEl.appendChild(rippleDiv);

         rippleDiv.style.left = (e.offsetX - rippleDiv.offsetWidth / 2) + 'px';
         rippleDiv.style.top = (e.offsetY - rippleDiv.offsetHeight / 2) + 'px';
         rippleDiv.classList.add('ripple');
         setTimeout(function() {
           rippleDiv.parentElement.removeChild(rippleDiv);
         }, 600);
       }, false);
     }
   };


 </script>

</body>

</html>