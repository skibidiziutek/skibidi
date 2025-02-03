<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uczniowie</title>
</head>
<body>
    <header>Lista uczniów.
        <ul>
            <li><a href=index.html>Dodaj uczniów</a></li>
        </ul>
    </header><br><br><br>
<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "uczniowie_2c";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die("nie działa połączenie" . mysqli_connect_error());
}

$sql = "SELECT * FROM uczniowie_2c";

$res = mysqli_query($con, $sql);

if(mysqli_num_rows($res) >0){
    while($row = mysqli_fetch_assoc($res)){
        echo "<div id='ok'>Imię: " . $row['imie'] . ", nazwisko: " . $row['nazwisko'] . ", wiek: " . $row['wiek'] . ", klasa: " . $row['klasa'] . "</div><br>";
    }
}
else{
    echo "brak uczniów.";
}
mysqli_close($con);

?>
</body>
</html>