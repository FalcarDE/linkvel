<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Erfolgreicher Upload</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../CSS/successfull_Upload.css">
</head>
<body>

<?php
include("../Frontend/NavBar.php");
?>

<div class="success_box">
    <p> Toller Beitrag !!! 😍 <br>
        Dein Beitrag wurde erfolgreich geteilt!🥳<br>
        <a href="../Frontend/creat_post.php">Noch einen Post erstellen<br></a>
        <a href="../Frontend/LandingPage.php">Zurück zur Startseite</a>
    </p>
</div>

</body>
</html>