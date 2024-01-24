<?php 
session_start();
if (!isset($_SESSION["current_user"])){
  header('location');
  header('location:login.php');
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
            <a class="logo_icon" href="index.php"><img src="./images/favicon/logo-image.png" alt="super_ultra_hiper_awesome_logo_from_the_AI_concept"></a>
        </div>
        <div class="search" id="search">
            <input type="text" placeholder="Wyszukaj...">
            <a href="" class="effect"><img class="icon icon-search" src="./images/icons/search.ico" alt="search_icon"></a>
        </div>
        <div id="contact" class="contact">
            <a href="contact.html" class="effect"><img class="icon icon-contact" src="./images/icons/phone.ico" alt="contact_me"><p>Kontakt</p></a>
        </div>
        <div id="account" class="account">
            <a href="account.php" class="effect"><img class="icon icon-login" src="./images/icons/user.ico" alt="login"><p>
                <?php
                    $conn = mysqli_connect("localhost","root","","shop") or die("Błąd bazy danych!");
                    $name = ucfirst($_SESSION['current_user']);
                    $shop = $conn->query("SELECT * FROM uzytkownicy WHERE email = '$name';");
                    if(mysqli_num_rows($shop) > 0){
                        while($s = mysqli_fetch_assoc($shop)){
                            echo $s['imie'];
                        }
                    }
                ?>
             
            </p></a>
        </div>
        <div id="favourite" class="favourite">
            <a href="favourite.html" class="effect"><img class="icon icon-favourite" src="./images/icons/favorite.ico" alt="your_favourite_products"><p>Ulubione</p></a>
        </div>
        <div id="bucket" class="bucket">
            <a href="bucket.html" class="effect"><img class="icon  icon-cart" src="./images/icons/cart.ico" alt="bucket_with_products"><p>Koszyk</p></a>
        </div>
    </header>
    <nav>
        <ul>
            <a href="./aboutus_logined.php"><li>O nas</li></a>
            <a href="./populartist_logined.php"><li>Najpopularniejsi artyści</li></a>
            <a href="./error_logined.php"><li>Aukcje</li></a>
            <a href="./index_logined.php"><li>Kupno</li></a>
            <a href="./sale_logined.php"><li>Sprzedaż</li></a>
        </ul>
    </nav>
    <article>
        <?php
        
        $conn = mysqli_connect("localhost","root","","shop") or die("Błąd bazy danych!");

            $shop = $conn->query("SELECT o.id, o.nazwa, a.imie, a.nazwisko, o.cena, o.img FROM obrazy o INNER JOIN autorzy a ON o.autor_id = a.id;");
            if(mysqli_num_rows($shop) > 0){
                while($s = mysqli_fetch_assoc($shop)){
                    echo "<a id='shop'>";
                    $img = $s["img"];
                    $cena = $s["cena"];
                    $nazwa = $s["nazwa"];
                    $nazwisko = $s["nazwisko"];
                    $imie = $s["imie"];
                        
                        echo "<h4>$nazwa</h4>";
                        echo "<img src='./images/pictures/$img' alt='film'>" . "<br>";
                        echo "<p>Autor: $imie $nazwisko</p>" . "<br>";
                        echo "<p>Cena: $cena zł</p>" . "<br>";
                        echo "</a>";
                   }
                   
                }
            else{
                echo "Błąd bazy danych!";
            }
            
            $conn->close();
        ?>
    </article>
    <footer>
        <p>© PAiNTHER Corporation 2022 - now</p>
    </footer>
</body>
</html>