<?php
 $conn = mysqli_connect('localhost', 'root', '', 'shop');

 if (isset($_POST['button'])) 
 {
         $obraz = $_POST["paint_img"];
         $zdjecie_uzyt = $_POST["user_img"];
         $cena = $_POST["price"];
         $imie = $_POST["first_name"];
         $nazwa = $_POST["title"];
         $nazwisko = $_POST["last_name"];
         $opis = $_POST["description"];
         $email = $_POST["email"];
         $tel = $_POST["tel"];
         $id = random_int(5,30);

 $shop = $conn->query("INSERT INTO autorzy(id,imie,nazwisko,img,opis) VALUES ('$id','$imie','$nazwisko','$zdjecie_uzyt','$opis')");
 $shop = $conn->query("INSERT INTO obrazy(id,nazwa,autor_id,cena,img) VALUES ('','$nazwa','$id','$cena','$obraz')");
     }
 
 $conn->close();
 
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
        <div id="login" class="login">
            <a href="login.php" class="effect"><img class="icon icon-login" src="./images/icons/login.ico" alt="login"><p>Zaloguj</p></a>
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
            <a href="./aboutus.html"><li>O nas</li></a>
            <a href="./populartist.php"><li>Najpopularniejsi artyści</li></a>
            <a href="./error.php"><li>Aukcje</li></a>
            <a href="./index.php"><li>Kupno</li></a>
            <a href="./sale.php"><li>Sprzedaż</li></a>
        </ul>
    </nav>
    <article id="sell">
    <div id="selling">
            <h2>Chcę sprzedać</h2>
            <form>
            <form action="#" method="post">
                <p id="log"></p>
                <p>Imię:</p>
                <input  placeholder="Imię (wymagane)" type="text" name="first_name" value=""><br>
                <p>Nazwisko:</p>
                <input  placeholder="Nazwisko (wymagane)" type="text" name="last_name" value=""><br>
                <p>E-mail:</p>
                <input  placeholder="E-mail (wymagane)" type="text" name="email" value=""><br>
                <p>Telefon:</p>
                <input  placeholder="Telefon (wymagane)" type="text" name="tel" value=""><br>
                <p>Tytuł: </p>
                <input  placeholder="Tytuł (wymagane)" type="text" name="title" value=""><br>
                <p>Cena: </p>
                <input placeholder="Cena (wymagane)" type="text" name="price" value=""><br>
                <textarea placeholder="Napisz krótko, kim jesteś (wymagane)" type="text" name="description" value=""></textarea><br>
                <p>Twoje zdjęcie (wymagane): <input id='file' placeholder="" type="file" name="user_img" value=""></p><br>
                <p>Zdjęcie dzieła (wymagane): <input id='file' placeholder="" type="file" name="paint_img" value=""></p><br>
                <label class="accept_text">Akceptuje <a href="./statute/regulamin-ochrony-danych-osobowych.pdf">regulamin</a> sklepu <a href="#" alt="wymagane" class="star">*</a></label><input type="checkbox" name="checkboxed" class="checkbox"><br>
                <button type="submit" name="button">Sprzedaje</button>
            </form>
        </div>
    </article>
    <footer>
        <p>© PAiNTHER Corporation 2022 - now</p>
    </footer>
</body>
</html>