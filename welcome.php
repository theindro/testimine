<?php
session_start();
if (!isset($_SESSION['myusername'])) {
    header("Location:login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
Sisseloggimine õnnestus, Tere tulemast! <a href="logout.php">Logi välja</a>


<h1 style="font-family:arial;">Javascript</h1>

<button type="button"
        onclick="document.getElementById('demo').innerHTML = Date()">
    Kuva kuupäev ja kellaaeg
</button>

<p id="demo"></p>

</body>
</html>