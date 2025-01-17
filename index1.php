<?php
    $con = mysqli_connect('localhost', 'root', '', 'sklep1');
    if (isset($_POST['wyslij'])) {
        $login = $_POST['login'];
        $email = $_POST['email'];
        $data = date("Y-m-d");
        $godzina = date("H:i");
        $sql1 = "INSERT INTO Uzytkownicy (login,email,data,godzina)
        VALUES ('$login','$email','$data', '$godzina')";
        $sql2 = "INSERT INTO Daty_logowania (data, godzina)
        VALUES ('data','godzina')";
    }
?>