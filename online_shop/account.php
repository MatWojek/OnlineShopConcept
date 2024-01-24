<?php 
session_start();
if (!isset($_SESSION["current_user"])){
  header('location');
  header('location:account.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep komputerowy - PAiNTHER</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon/favicon.ico">
    <link href="./style.css" rel="stylesheet">
</head>
<body>
    <header>

        <div id="logo" class="logo">
            <a class="logo_icon" href="index_logined.php"><img src="./images/favicon/logo-image.png" alt="super_ultra_hiper_awesome_logo_from_the_AI_concept"></a>
        </div>
    </header>
    <article id="logined">
    <?php
        $conn = mysqli_connect("localhost","root","","shop") or die("Błąd bazy danych!");
        $name = ucfirst($_SESSION['current_user']);
        $shop = $conn->query("SELECT * FROM uzytkownicy WHERE email = '$name'");
        if(mysqli_num_rows($shop) > 0){
            while($s = mysqli_fetch_assoc($shop)){
                echo "<div id='loginedd'>";
                
                $first_name = $s['imie'];
                $last_name = $s['nazwisko'];
                $email = $s['email'];
                $username = $s['nazwa'];
                $phone = $s['telefon'];
                    
                    echo "<h1>Witaj, $first_name</h1>"."<br>";
                    echo "<h2><a>Twoje dane:</a></h2>"."<br>";
                    echo "<p id='print'><a>Login:</a> $username</p>";
                    if($phone == 0){
                        echo "<p id='print'><a>Telefon:</a> brak</p>";
                    }
                    else{
                        echo "<p id='print'><a>Telefon:</a> $phone</p>";
                    }
                    echo "<p id='print'><a>E-mail:</a> $email</p>" . "<br>";
                    echo "</div>";
               }
               
            }
        else{
            echo "Błąd bazy danych!";
        }
        
        $conn->close();
    ?>
    <div class="logout" id="logout">
        <a class="effect" href="./logout.php"><img class="icon icon-logout"src="./images/icons/logout.ico" alt="logout"><p>Wyloguj</p></a>
    </div>
    </article>
    <footer>
        <p>© PAiNTHER Corporation 2022 - now</p>
    </footer>
</body>
</html>