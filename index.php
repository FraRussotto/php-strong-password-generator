<?php

require_once __DIR__ . '/function.php';

$msg = 'Scegliere password con almeno 8 caratteri e massimo 32 caratteri';

$custom_alert = 'primary';

$password = '';

if(isset($_POST['password_length']) && !empty($_POST['password_length'])){
  if($_POST['password_length'] > 8 && $_POST['password_length'] < 32){
      $password = psw_generator($_POST['password_length']);
      $msg = "La tua password è: <strong>$password</strong>";
      $custom_alert = 'success';
    }
    else{
      $msg = 'La lunghezza deve essere compresa tra 8 e 32';
      $custom_alert = 'danger';
    }
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>

  <link rel="stylesheet" href="style.css">

  <title>Password generator</title>
</head>
<body>

  <div class="container_fr my-3">
    <h1 class="text-center">Password generator</h1>

    <div class="alert alert-<?php echo $custom_alert ?> mt-5" role="alert">
      <?php echo $msg ?>
    </div>

    <div class="bg-white text-dark rounded-1 p-3 text-center ">
      <form action="index.php" method="POST">
        <div class="input pb-3 d-flex flex-column justify-content-center align-items-center">
          <p>Lunghezza password:</p>
          <input type="number" name="password_length" class="form-control input-w">
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
        <button class="btn btn-warning" type="reset">Reset</button>
      </form>
    </div>
  </div>

</body>
</html>