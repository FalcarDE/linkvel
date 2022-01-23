<!-- Created by @Antonia Geschke-->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressum</title>
    <link rel="stylesheet" href="../CSS/Impressum_styles.css">
    <script type="text/javascript" src="Impressum.js"></script>
</head>
<body>

<?php
include("../Frontend/NavBar.php");
?>

<div class="main-container">

<div class="container">
<div class="Impressum">
<h1>Impressum</h1>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
        quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
        consequat.</p>

</div>
    <div class="image">
        <BODY   onload="ChangeImage()">
        <img name="slide" class="slideImage">
    </div>
</div>





<div class="Policy">
<h1>Policy</h1>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
    consequat.</p>

</div>
</div>

</body>
</html>