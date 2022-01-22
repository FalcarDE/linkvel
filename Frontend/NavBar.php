<!-- Created by <@!770261677630291979>Laible  Extended by @Antonia Geschke-->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Responsive Navigationsleiste</title>
    <link rel="stylesheet" href="../CSS/NavBarStyle.css">
    <script type="text/javascript" src="../Frontend/nav.js" defer></script>
</head>
<body>
<div id="top">

    <nav class="nav">
        <div class="nav-inner">
            <div>
                <a href="../Frontend/LandingPage.php" class="nav_logo">Linkvel</a> <br>
                <?php
                require_once '../Backend/CNavBarBuilder.php';
                CNavBarBuilder::chooseUsername();
                ?>
            </div>
        </div>

        <a href="#" class="toggle-button">
            <xspan class="bar"></xspan>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>

        <div class="list-container">
            <ul>
                <div class="box">

                    <form method="get" action="../Frontend/SearchPage.php">
                        <input name="Search" class="searchinput" type="text"  placeholder="SUCHE">
                        <button class="button" href="#">
                            <a href="#"><i class="material-icons"></a>search</i>
                        </button>
                    </form>
                </div>

                <?php
                require_once '../Backend/CNavBarBuilder.php';
                CNavBarBuilder::chooseNavView();?>

            </ul>
        </div>
    </nav>
</div>




<footer>
    <div class="footer-outer">
        <div class="footer-inner">
            <ul id="footer-links">
                <li><a href="../Frontend/FAQ_Page.php">FAQ</a></li>
                <li><a href="../Frontend/Impressum.php">POLICY & IMPRESSUM</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>



</html>