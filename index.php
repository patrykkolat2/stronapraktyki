<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="icon" href="zdj/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/wyslane.css">
</head>
<body>
    <header> 
        <div class="naglowek">
            <a href="index.html"><img src="zdj/logo.png" alt="Logo"></a>
            <h1>SKLEP Z ELEKTRONIKĄ 🔌</h1>
            <a href="rejestracja.html"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M226-262q59-42.33 121.33-65.5 62.34-23.17 132.67-23.17 70.33 0 133 23.17T734.67-262q41-49.67 59.83-103.67T813.33-480q0-141-96.16-237.17Q621-813.33 480-813.33t-237.17 96.16Q146.67-621 146.67-480q0 60.33 19.16 114.33Q185-311.67 226-262Zm253.88-184.67q-58.21 0-98.05-39.95Q342-526.58 342-584.79t39.96-98.04q39.95-39.84 98.16-39.84 58.21 0 98.05 39.96Q618-642.75 618-584.54t-39.96 98.04q-39.95 39.83-98.16 39.83ZM480.31-80q-82.64 0-155.64-31.5-73-31.5-127.34-85.83Q143-251.67 111.5-324.51T80-480.18q0-82.82 31.5-155.49 31.5-72.66 85.83-127Q251.67-817 324.51-848.5T480.18-880q82.82 0 155.49 31.5 72.66 31.5 127 85.83Q817-708.33 848.5-635.65 880-562.96 880-480.31q0 82.64-31.5 155.64-31.5 73-85.83 127.34Q708.33-143 635.65-111.5 562.96-80 480.31-80Zm-.31-66.67q54.33 0 105-15.83t97.67-52.17q-47-33.66-98-51.5Q533.67-284 480-284t-104.67 17.83q-51 17.84-98 51.5 47 36.34 97.67 52.17 50.67 15.83 105 15.83Zm0-366.66q31.33 0 51.33-20t20-51.34q0-31.33-20-51.33T480-656q-31.33 0-51.33 20t-20 51.33q0 31.34 20 51.34 20 20 51.33 20Zm0-71.34Zm0 369.34Z"/></svg></a>
        </div>
    </header>
    <main>
      <div class="wyslane">
         <h1> Wiadomość została przesłana! </h1>
         <img src="zdj/wyslane.gif" alt="gif">
      </div>
    </main>  
    <footer>
        <div class="stopka">
            <a href="onas.html">O nas 👋</a>
            <p> Stronę wykonał: <span>PATRYK KOŁAT</span></p>
            <a href="kontakt.html"> Kontakt 📲</a>
        </div>
    </footer>
</body>
</html>
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
