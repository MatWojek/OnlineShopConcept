<?php 
    $conn = mysqli_connect("localhost","root","","shop") or die("Błąd bazy danych!");
            if (isset($_POST['register'])) {
            $user_loginname =  mysqli_real_escape_string($conn, $_POST["name"]);
            $user_name = mysqli_real_escape_string($conn,$_POST["first_name"]);
            $user_lastname =  mysqli_real_escape_string($conn,$_POST["last_name"]);
            $user_email = mysqli_real_escape_string($conn,$_POST["email"]);
            $user_phone =  mysqli_real_escape_string($conn,$_POST["tel"]);
            $user_password = mysqli_real_escape_string($conn,$_POST["password"]);
            $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);
            
                if (mysqli_query($conn, "INSERT INTO `uzytkownicy` (`user_id`,`nazwa`, `imie`, `nazwisko`, `email`, `telefon`, `haslo`)
                VALUES (NULL, '$user_loginname', '$user_name','$user_lastname','$user_email', '$user_phone', '$user_password_hash');")){
                    echo "Konto zostało utworzone!";
                }
                else {
                    echo "Konto o podanym e-mailu już istnieje.";
                }
    }
            ?>