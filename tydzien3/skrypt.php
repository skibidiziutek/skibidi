<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header><a href="index.html">Powrót na stronę główną</a></header><br><br><br>
<body id="skrypt">
<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "uczniowie_2c";

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$wiek = $_POST['wiek'];
$klasa = $_POST['klasa'];


$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die("nie działa połączenie" . mysqli_connect_error());
}

$sql = "INSERT INTO uczniowie_2c (imie, nazwisko, wiek, klasa) VALUES ('$imie', '$nazwisko', '$wiek', '$klasa')";


if (mysqli_query($con, $sql)){
    echo "<div id='wynik'>✅ Uczeń został dodany</div>";
}
else{
    echo"<div id='wynik'>❌ Błąd</div>";
}
mysqli_close($con);
?>
</body>
</html>