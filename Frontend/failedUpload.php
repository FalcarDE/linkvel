<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fehler beim Hochladen</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../CSS/upload_failure.css">
</head>
<body>

<?php
include("../Frontend/NavBar.php");
?>

<div class="failure_box">
    <p> Leider ist etwas schief gelaufen 😦 <br>
        <a href="../Frontend/creat_post.php">Probiere es nochmal!<br></a>
        <a href="../Frontend/LandingPage.php">Zurück zur Startseite</a>
    </p>
</div>

</body>
</html>
