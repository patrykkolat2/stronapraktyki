<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wysłane 📨</title>
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
        if(isset($_POST['wyslij'])) {    
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $email = $_POST['email'];
            $tresc = $_POST['tresc'];
            $sql = "INSERT INTO wiadomosci (imie,nazwisko,email,tresc)
            VALUES ('$imie','$nazwisko','$email', '$tresc')";
            if (mysqli_query($con, $sql)) {
                print "Wiadomość wysłana!";
            } else {
                print "Błąd";
            }
        }
        mysqli_close($con);
    ?>
    <br><br>
    <a href="../index.html"> <p>Wróc do strony głównej </p></a>
</body>
</html>