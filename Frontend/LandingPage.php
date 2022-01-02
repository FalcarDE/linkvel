<!--
created  by  @Hoang
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>LandingPage</title>
    <link rel="stylesheet" href="../CSS/LandingPage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php include "../Frontend/NavBar.html" ?>




<div class="UnderNavbar">
    <!--------------------------------------- Section für linke Seite für mittlere Einrückung ----------------------------------- -->
    <div class="LeftSide">
        <!--------------------------------------- Section für IconBar ----------------------------------- -->
        <div class="IconBar">
            <ul >
                <br>
                <li><button>    <i class="material-icons">create</i>            Create New Post     </button></li>
                <br>
                <li><button>    <i class="material-icons">help</i>              FAQ                 </button></li>
                <br>
                <li> <button>   <i class="material-icons">account_circle</i>    Mein Account        </button></li>
                <br>
                <li><button><a style="color:black; text-decoration:none" href="../Backend/logout.php" > <i class="material-icons">logout</i>            Logout              </a></button></li>
                <br>
            </ul>
        </div>
    </div>




    <!-------------------------------------  Section für Post ----------------------------------- -->

    <div class="PostSection">
        <div class='WelcomeCard'>
                <article>
                    <?php
                    require_once('../Backend/Feedsloading.php');
                    $PostData = new PostData();
                    $PostData::generateWelcomeCard();
                    ?>
                </article>
        </div>
        <?php
            require_once('../Backend/Feedsloading.php');
            $PostData = new PostData();
            $KeyIndex = count($PostData::getAllPostId());
            $KeyID    = 1;

            for ($Index = 0; $Index < $KeyIndex ; $Index++)
            {
                $PostData::generateHtml($KeyID);
                $KeyID = $KeyID + 1;
            }
        ?>
    </div>

    <!-------------------------------------  Section rechte Seite für mittlere Einrückung ------------------------------------->
    <div class="RightSide"></div>


    <!-------------------------------------  Section Wetter Api Andindung ------------------------------------->
    <div class="ApiWeather">
        <ul >
            <li> Lissabon   </li>
            <li> London     </li>
            <li> Berlin     </li>
            <li> Rom        </li>
        </ul>

    </div>
</div>
</body>
</html>
