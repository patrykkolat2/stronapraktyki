<?php
$con = mysqli_connect('localhost', 'root', '', 'sklep1');
if(isset($_POST['wyslij']))
{    
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
     mysqli_close($con);
}
?>


