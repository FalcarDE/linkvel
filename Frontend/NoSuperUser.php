<!--Created by @AntoniaGeschke -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erfolgreicher Upload</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../CSS/NoSuperUser_Styles.css">
</head>
<body>

<?php
include("../Frontend/NavBar.php");
?>

<div class="content">
<p>Um einen Beitrag zu posten, musst du ein SuperUser sein.</p>
<a class="GoBack" href="../Frontend/LandingPage.php">Zurück zur Startseite</a>
</div>

</body>
</html>