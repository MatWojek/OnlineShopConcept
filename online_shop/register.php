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
    </header>
    <div id="article_register">
        <section>
        <div id="logining">
            <h2>Załóż konto</h2>
            <form action="./php/register_function.php" method="POST">
                <p>Nazwa użytkownika:</p>
                <input  placeholder="Nazwa użytkownika (wymagane)" type="text" name="name" value="" required><br>
                <p>Imię:</p>
                <input  placeholder="Imię (wymagane)" type="text" name="first_name" value="" required><br>
                <p>Nazwisko:</p>
                <input  placeholder="Nazwisko (wymagane)" type="text" name="last_name" value="" required><br>
                <p>E-mail:</p>
                <input  placeholder="E-mail (wymagane)" type="text" name="email" value="" required><br>
                <p>Telefon:</p>
                <input  placeholder="Telefon (opcjonalnie)" type="text" name="tel" value=""><br>
                <p>Hasło:</p>
                <input  placeholder="Hasło (wymagane)" type="password" name="password" value="" required><br>
                <label class="accept_text">Akceptuje <a href="./statute/regulamin-ochrony-danych-osobowych.pdf">regulamin</a> sklepu <a href="#" alt="wymagane" class="star">*</a></label><input type="checkbox" name = "checkboxed" class="checkbox" required>
                <button type="submit" name="register">Załóż konto</button>
            </form>
        </div>
        <div id="register">
        <h2>Masz już konto?</h2><br><br>
            <a href="login.php">Zaloguj się</a><br><br>
            <ul><h3>Dlaczego warto założyć u nas konto:</h3><br>
                <li>Korzystaj z aukcji</li>
                <li>Śledź status swojego zamówienia</li>
                <li>Korzystaj z rabatów i promocji</li>
                <li>Miej wszystko w zasięgu swojego telefonu lub komputera</li>
                <li>Zyskujesz kartę stałego klienta</li>
                <li>Masz prawo do zakupu dzieł, które nie są jeszcze upublicznione</li>
            </ul>
        </div>
        </section>
    </div>
    <footer>
        <p>© PAiNTHER Corporation 2022 - now</p>
    </footer>
</body>
</html>