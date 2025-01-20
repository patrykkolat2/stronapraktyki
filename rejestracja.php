<?php
    $con = mysqli_connect('localhost', 'root', '', 'sklep1');
    $login = $_POST['login'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM Użytkownicy WHERE LOGIN = '$login'";
    if (mysqli_query($con, $sql) && mysqli_num_rows(mysqli_query($con, $sql)) > 0) {
        $sql = "INSERT INTO Daty_logowania (LOGIN) VALUES ('$login')";
        if (mysqli_query($con, $sql)) {
            echo "Jesteś już zarejestrowany!";
        } else {
        echo "Błąd podczas dodawania daty logowania: " . mysqli_error($con);
        }
    } else {
        $sql = "INSERT INTO Użytkownicy (LOGIN, EMAIL) VALUES ('$login', '$email')";
        if (mysqli_query($con, $sql)) {
            $sql = "INSERT INTO Daty_logowania (LOGIN) VALUES ('$login')";
            if (mysqli_query($con, $sql)) {
                echo "Rejestracja zakończona pomyślnie!";
            } else {
                echo "Błąd podczas dodawania daty logowania: " . mysqli_error($con);
            }
        } else {
            echo "Błąd podczas rejestracji: " . mysqli_error($con);
        }
    }
    mysqli_close($con);
?>