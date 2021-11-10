<?php 


function login() {
  header('Content-Type: application/json');


    $method = 'POST';
    $url = 'https://dorimar-api.site/api/users/login/';
    $json_array = [
    
        'email'=> $_POST['usuario'],
        'password' => $_POST['password'],
        
    ];

    $body = json_encode($json_array);
/* 
echo '<pre>';
var_dump($json_array);
var_dump($body);
echo '</pre>';

die();  */

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPGET, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Content-Length: ' . strlen($body)));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // return the transfer as a string
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch); // send the request and save response to $response

    if ($response === false) {
      die('SIGN-IN ERROR => Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    }

    // if user account exists return the user response data
    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200) {
      $response = json_decode($response, true);
      //session
      var_dump($response);
      /* die(); */

      $_SESSION['usuario'] = $response;
      header('Location: home.php');
    } else {
      header('Location: login.php');
    }

    curl_close($ch);
}




?>