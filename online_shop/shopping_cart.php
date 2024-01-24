<?php
  session_start();
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
    </header>
    <article>
        <h1>Koszyk (<?php
                if(isset($_SESSION['bucket'])){
                    foreach(unserialize($_SESSION['bucket']) as $product){
                    echo "<li>".count($product)."</li>";
                    }
                }else{
                    echo "0";
                }
            ?>)</h1>
        <?php
        if(isset($_SESSION['bucket'])){
            foreach(unserialize($_SESSION['bucket']) as $product){
            echo "<li>".$product."</li>";
            }
        }else{
            echo "Twój koszyk jest pusty"."<br>";
        }
        ?>
        <a href="index.php">Przejdź do strony głównej</a>
    </article>
    <footer>
        <p>© PAiNTHER Corporation 2022 - now</p>
    </footer>
</body>
</html>