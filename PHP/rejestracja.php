<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja 📝</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $con = mysqli_connect('localhost', 'root', '', 'sklep1');
        $login = $_POST['login'];
        $email = $_POST['email'];
        $sql = "SELECT * FROM Użytkownicy WHERE LOGIN = '$login'";
        if (mysqli_query($con, $sql) && mysqli_num_rows(mysqli_query($con, $sql)) > 0) {
            $sql = "INSERT INTO Daty_logowania (LOGIN) VALUES ('$login')";
            if (mysqli_query($con, $sql)) {
                print "Jesteś już zarejestrowany!";
            } else {
                print "Błąd podczas dodawania daty logowania: " . mysqli_error($con);
            }
        } else {
            $sql = "INSERT INTO Użytkownicy (LOGIN, EMAIL) VALUES ('$login', '$email')";
            if (mysqli_query($con, $sql)) {
                $sql = "INSERT INTO Daty_logowania (LOGIN) VALUES ('$login')";
                if (mysqli_query($con, $sql)) {
                    print "Rejestracja zakończona pomyślnie!";
                } else {
                    print "Błąd podczas dodawania daty logowania: " . mysqli_error($con);
                }
            } else {
                print "Błąd podczas rejestracji: " . mysqli_error($con);
            }
        }
        mysqli_close($con);
    ?>
    <a href="../index.html"> <p>Wróc do strony głównej </p></a>
</body>
</html>