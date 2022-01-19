<!-- Created by @HelenLaible  Extended by @Antonia Geschke-->
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

    <nav class="navigation_bar">
        <div class="LeftSideBar">
            <a href="../Frontend/LandingPage.php" class="nav_logo">linkvel</a>
            <div class="UserName" >
                <?php
                if (isset($_SESSION['AccountKey']))
                {
                    require_once('../Backend/CUserDataLoading.php');
                    echo CUserDataLoading::getUserName(implode($_SESSION['AccountKey']));
                }
                ?>
            </div>
        </div>


        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="list-container">
            <ul>

                <div class="box">

                    <form method="get" action="../Frontend/SearchPage.php">
                        <input name="Search" class="input" type="text"  placeholder="SUCHE">
                        <button class="button" href="#">
                            <a href="#"> <i class="material-icons"> search </i></a>


                        </button>
                    </form>
                </div>

                <li><a href="../Frontend/LandingPage.php">STARTSEITE</a></li>
                <li><a href="#">MEIN KONTO</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="../Backend/SessionValidation.php">PROFIL ANSEHEN</a></li>
                            <li><a href="#">PROFIL BEARBEITEN</a></li>
                            <li><a href="../Frontend/Login_Registration_Formular.html">LOGIN</a></li>
                        </ul>
                    </div>
                <li><a href="../Backend/logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--
<bottom>
    <footer>
        <ul class="footer">
            <li><a href="#">FAQ</a></li>
            <li><a href="../Frontend/Impressum.php">POLICY & IMPRESSUM</a></li>
        </ul>
    </footer>
</bottom>
-->
</body>

</html>

