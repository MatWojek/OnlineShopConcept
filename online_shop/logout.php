<?php
  session_start();
  if (isset($_SESSION['current_user'])){
    unset($_SESSION['current_user']);
  }else{
    header("location");
    header("location:logout.php");
  }
  $s=session_destroy();
?>
<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sklep komputerowy - PAiNTHER</title>
  <link rel="icon" type="image/x-icon" href="./images/favicon/favicon.ico">
  <style>
    body{
      background-color: #0A0A0A;
      color: white;
    }
    #logout{
    text-align: center;
    width: 30em;
    margin: 0 auto;
   
    }
  </style>
</head>
<body>
 <div id='logout'>
    <a href='index.php'><img src='./images/favicon/logo.png' /></a>
    <h1>Zostałeś wylogowany</h1>
    <h1>Miłego dnia!</h1>
    <h3><a href='index.php'>Wróć do strony głównej</a></h3>
  </div>
</body>
</html>