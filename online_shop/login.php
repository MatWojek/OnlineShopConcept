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
    <article>
        <section>
        <div id="logining">
            <h2>Zaloguj się!</h2>
            <form action="#" method="post">
                <p>E-mail:</p>
                <input  placeholder="E-mail" type="text" name="email" value="" required><br>
                <p>Hasło:</p>
                <input  placeholder="Hasło" type="password" name="password" value="" required><br>
                <button type="submit" name="login">Zaloguj</button>
            </form>
            <?php
            $conn = mysqli_connect("localhost","root","","shop");
            session_start();
            if(isset($_SESSION['current_user'])){
                header('location:index_logined.php');
                exit();
            }
            elseif(isset($_POST['email']) && isset($_POST['password']) && isset($_POST["login"]))  {
                $user_email = mysqli_real_escape_string($conn,$_POST["email"]);
                $user_password = mysqli_real_escape_string($conn,$_POST["password"]);
                $shop = $conn->query("SELECT * FROM uzytkownicy WHERE email = '$user_email'");
                    
                if(mysqli_num_rows($shop) > 0){
                    $record = mysqli_fetch_assoc($shop);
                    $hash = $record["haslo"];
                    if (password_verify($user_password, $hash)) {
                        $_SESSION["current_user"] = $_POST['email'];
                        header("location:index_logined.php");
                        exit();
                        }     
                        else{
                            echo "Wpisano złe dane logowania.";
                        }  
                    }
                }
            
        ?>
        </div>
        <div id="register">
            <h2>Nie masz jeszcze konta?</h2><br><br>
            <a href="register.php">Załóż konto</a><br><br>
            <ul><h3>Dlaczego warto założyć u nas konto:</h3><br>
                <li>Korzystaj z aukcji</li>
                <li>Śledź status swojego zamówienia</li>
                <li>Korzystaj z rabatów i promocji</li>
                <li>Miej wszystko w zasięgu swojego telefonu lub komputera</li>
                <li>Zyskujesz kartę stałego klienta</li>
                <li>Masz prawo do dzieł, które nie są jeszcze upublicznione</li>
            </ul>
        </div>
        </section>
    </article>
    <footer>
        <p>© PAiNTHER Corporation 2022 - now</p>
    </footer>
</body>
</html>