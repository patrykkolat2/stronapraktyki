<?php
$con = mysqli_connect(' sql7.freesqldatabase.com', 'sql7758516', 'JF8Yfq5Mjm', 'sql7758516');
if(isset($_POST['wyslij']))
{    
     $imie = $_POST['imie'];
     $nazwisko = $_POST['nazwisko'];
     $email = $_POST['email'];
     $tresc = $_POST['tresc'];
     $sql = "INSERT INTO users (imie,nazwisko,email,tresc)
     VALUES ('$imie','$nazwisko','$email', '$tresc')";
     if (mysqli_query($con, $sql)) {
        print "Wiadomość wysłana!";
     } else {
        print "Błąd";
     }
     mysqli_close($con);
}
?>


