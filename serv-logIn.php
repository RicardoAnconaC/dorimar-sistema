<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php print $_POST["usuario"]; ?></h1>
</body>
</html>

<?php 



header('Content-Type: application/json');


    $method = 'POST';
    $url = 'https://dorimar-api.site/api/users/login';
    $json_array = [
    
        'usuario'=> $_POST['usuario'],
        'contraseña' => $_POST['contraseña'],
        
    ];

    $body = json_encode($json_array);

/*   echo '<pre>';
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
    $response = curl_exec($ch); // send the request and save response to $response

    if ($response === false) {
      die('SIGN-IN ERROR => Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    }

    // if user account exists return the user response data
    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200) {
      $response = json_decode($response, true);
    }

    curl_close($ch);

    echo json_encode($response);

?>