<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM adminn WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['id'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['myusername'] = $myusername;
        $_SESSION['mypassword'] = $mypassword;
        header("location:welcome.php");
    } else {
        echo "<p style='text-align:center; color:red;'>Vale kasutajatunnus või parool!</p>";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loggi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div id="kast" style="text-align:center;">
    <form action="" method="post">
        <h1 style="font-family:arial;">Login</h1>

        <p></p>
        <input name="username" type="text" placeholder="kasutajanimi">

        <p></p>
        <input name="password" type="password" placeholder="parool">
        <br>
        <br>
        <input type="submit" value="Sisene">
    </form>


</div>
</body>
</html>