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

    <link rel="stylesheet" href="../CSS/LandingPage.css">
    <script type="text/javascript" src="../Frontend/LandingPage.js"></script>

</head>
<body>

<div class="NavBar">
<?php
include("../Frontend/NavBar.php");
?>

</div>

<div class="UnderNavbar">
    <div class="LeftSide">
        <div class="IconBar"></div>
    </div>


    <div class="PostSection">
            <div class='WelcomeCard'>
                <article>
                    <?php

                    require_once '../Backend/CSearch.php';

                    $searchstatement = $_GET["Search"];

                    $SearchResults = CSearch::Search($searchstatement);

                    if(empty($SearchResults))
                    {
                        echo
                           "<p class='ErrorMessage'>"
                           ."Zu dem Suchbegriff konnte kein Beitrag gefunden werden"
                           ."<br>"
                           ."</p>"
                           ."<a class='GoBack' href='../Frontend/LandingPage.php'>"."ZURÜCK ZUR STARTSEITE"."</a>";
                    }
                    else
                    {
                        if((count($SearchResults) == 1))
                        {
                            echo "<p class='Message'>"
                                ."Zum Suchbegriff wurde ". count($SearchResults). " Beitrag gefunden:"
                                ."</p>";
                        }

                        else
                        {
                            echo "<p class='Message'>"
                                ."Zum Suchbegriff wurden ". count($SearchResults) . " Beiträge gefunden:"
                                ."</p>";
                        }


                        //foreach ($SearchResults as $i => $SearchResult)
                        //{
                        //    echo count($SearchResult['PostKey']);
                        //}

                        echo "<a class='GoBack' href='../Frontend/LandingPage.php'>"
                             ."ZURÜCK ZUR STARTSEITE"
                             ."</a>";
                    }
                    ?>
                </article>
            </div>

            <?php
            echo CSearch::showPostResult();
            ?>

    </div><div class="RightSide" id="RightSide"></div>
</div>


</body>
</html>



