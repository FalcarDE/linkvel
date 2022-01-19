<!-- Created by @Antonia Geschke-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suchergebnis</title>
    <link rel="stylesheet" href="../CSS/SearchPageStyles.css">
    <link rel="stylesheet" href="../CSS/LandingPage.css">
    <script type="text/javascript" src="../Frontend/LandingPage.js"></script>

</head>
<body>

<div class="NavBar">
<?php
include("../Frontend/NavBar.php");
?>

</div>


<div class="SearchResults">
<?php

require_once '../Backend/CSearch.php';

$searchstatement = $_GET["Search"];

$SearchResults = CSearch::Search($searchstatement);
?>

<?php if(empty($SearchResults)) : ?>

    <p class="ErrorMessage"><?php echo "Zu dem Suchbegriff konnte kein Beitrag gefunden werden".'<br>';?></p>
    <a class="GoBack" href="../Frontend/LandingPage.php">ZURÜCK ZUR STARTSEITE</a>
<?php else: ?>

<p class="Message">Es wurden folgende Beiträge gefunden</p>
    <?php foreach ($SearchResults as $i => $SearchResult):?>
    <div  class="Results">
    <?php echo $SearchResult['PostKey'].'<br>'?>
    </div>
    <?php endforeach;?>


    <a class="GoBack" href="../Frontend/LandingPage.php">ZURÜCK ZUR STARTSEITE</a>

<?php endif ?>

    <div class="Post">
        <?php
        echo CSearch::showPostResult();
        ?>
    </div>

</div>
</body>
</html>



