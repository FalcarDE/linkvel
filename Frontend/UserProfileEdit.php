<!-- Created by @Duc Duong -->
<?php
session_start();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deine persönlichen Informationen</title>
    <link rel="stylesheet" href="../CSS/UserProfileEditPage_Style.css">
</head>
<body>


<!-------------------------- Navigation -------------------------------------------------------------------------------------------------------------------------------- -->

<?php include "../Frontend/NavBar.php"; ?>



<!---------------------------- Container -------------------------------------------------------------------------------------------------------------------------------- -->

<div class="container">

    <!---------------------------- Left Container -->

    <div class="left-container">

        <div class="left-container-box">
            <div class="profile-box">
                <img class="profile-img" src="../image/Standard_Profilbild.png" alt="Profil-Bild">
            </div>

            <div class="underline">
                <h3 id="profile-name">
                    <?php

                    require_once('../Backend/CUserDataLoading.php');
                    $FirstName  =   CUserDataLoading::getUserFirstname(implode($_SESSION['AccountKey']));
                    $Midname    =   CUserDataLoading::getUserMidname(implode($_SESSION['AccountKey']));
                    $LastName   =   CUserDataLoading::getUserLastname(implode($_SESSION['AccountKey']));

                    if(empty($Midname))
                    {
                        echo $FirstName." ".$LastName;
                    }
                    else
                    {
                        echo $FirstName." ".$Midname." ".$LastName;
                    }
                    ?>
                </h3>
                <div class="profil-roll-box">
                    <h5 id="permission"> User-Rolle:
                        <?php
                        require_once('../Backend/CUserDataLoading.php');
                        echo CUserDataLoading::getUserRole(implode($_SESSION['AccountKey']));
                        ?> </h5>
                </div>
                <div class="last-login-box">
                    <h5 id="last-login-time">zuletzt online:
                        <?php
                        require_once('../Backend/CUserDataLoading.php');
                        echo CUserDataLoading::getUserLastLogIn(implode($_SESSION['AccountKey']));
                        ?>
                    </h5>
                </div>
            </div>
        </div>

    </div>




    <!---------------------------- Right Container -->

    <div class="middle-container">

        <div class="profil-tag-box">
            <h2 id="profil-tag">Profil-Daten bearbeiten</h2>
        </div>


        <div class="middle-container-box">


            <!-- In den Placeholder sollen dir Daten, die schon vorhanden sind rein  -->

            <div class="form-box">
                <form id="register" method="post" action="../Backend/CUserDataEdit.php" class="input-group">

                    <div class="form-box-left">

                        <label class="label">Vorname             </label>        <input autocomplete="on"       class="input-field"        name="FirstName"         type="text"         placeholder='<?php
                                                                                                                                                                                                     require_once('../Backend/CUserDataLoading.php');
                                                                                                                                                                                                     echo CUserDataLoading::getUserFirstname(implode($_SESSION['AccountKey']));
                                                                                                                                                                                                     ?>'>

                        <label class="label">Mittelname          </label>        <input autocomplete="on"       class="input-field"        name="MidName"           type="text"         placeholder='<?php
                                                                                                                                                                                                     require_once('../Backend/CUserDataLoading.php');
                                                                                                                                                                                                     $Midname  = CUserDataLoading::getUserMidname(implode($_SESSION['AccountKey']));
                                                                                                                                                                                                     if(empty($Midname))
                                                                                                                                                                                                     {echo "-";}
                                                                                                                                                                                                     else
                                                                                                                                                                                                     {echo $Midname;}
                                                                                                                                                                                                     ?>'>


                        <label class="label">Nachname            </label>        <input autocomplete="on"       class="input-field"        name="LastName"          type="text"         placeholder='<?php
                                                                                                                                                                                                     require_once('../Backend/CUserDataLoading.php');
                                                                                                                                                                                                     echo CUserDataLoading::getUserLastname(implode($_SESSION['AccountKey']));
                                                                                                                                                                                                     ?>'>

                        <label class="label">Adresse             </label>        <input autocomplete="on"       class="input-field"        name="StreetAddress"     type="text"         placeholder='<?php
                                                                                                                                                                                                     require_once('../Backend/CUserDataLoading.php');
                                                                                                                                                                                                     echo CUserDataLoading::getUserAddress(implode($_SESSION['AccountKey']));
                                                                                                                                                                                                     ?>'>

                    </div>


                    <div class="form-box-right">
                        <label class="label">Postleitzahl        </label>        <input autocomplete="on"       class="input-field"        name="ZipCode"           type="number"       placeholder='<?php
                                                                                                                                                                                                     require_once('../Backend/CUserDataLoading.php');
                                                                                                                                                                                                     echo CUserDataLoading::getUserZipCode(implode($_SESSION['AccountKey']));
                                                                                                                                                                                                     ?>'>

                        <label class="label">Land                </label>        <input autocomplete="on"       class="input-field"        name="Country"           type="text"         placeholder='<?php
                                                                                                                                                                                                     require_once('../Backend/CUserDataLoading.php');
                                                                                                                                                                                                     echo CUserDataLoading::getUserCountry(implode($_SESSION['AccountKey']));
                                                                                                                                                                                                     ?>'>

                        <label class="label">Email               </label>        <input autocomplete="on"       class="input-field"        name="Email"             type="email"        placeholder='<?php
                                                                                                                                                                                                     require_once('../Backend/CUserDataLoading.php');
                                                                                                                                                                                                     echo CUserDataLoading::getUserEmail(implode($_SESSION['AccountKey']));
                                                                                                                                                                                                     ?>'>

                        <label class="label">Passwort            </label>        <input autocomplete="on"       class="input-field"        name="Password"          type="password"     placeholder=''>

                    </div>


                    <div class="middle-container-button-box">
                        <button type="submit" class="save-button">Speicher</button>

                        <!--
                        Das Problem hier ist, dass man auf das Wort "zurück" drücken muss um auf die andere Seite zu kommen!
                           <button type="button" class="back-button"><a href="../Frontend/profil.php">Zurück</a></button>
                           -->
                    </div>
                </form>

                <div class="middle-container-button-box">

                    <form action="../Frontend/UserProfilePage.php">
                        <button type="submit" class="back-button">Zurück</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------- Right Container -->

    <div class="right-container">

        <div class="right-container-box">
            <div class="post-link-headline">
                <h3>Erstellte Posts:</h3>
            </div>

            <!-- <a> tag defines a hyperlink -->
            <!-- <li> tag defines a list item -->
            <div class="post-link-box">
                <a href="https://de.wikipedia.org/wiki/Denver">                 <li>Denver    </li></a>
                <a href="https://de.wikipedia.org/wiki/Rio_de_Janeiro">         <li>Rio       </li></a>
                <a href="https://de.wikipedia.org/wiki/Tokio">                  <li>Tokio     </li></a>
                <a href="https://de.wikipedia.org/wiki/Berlin">                 <li>Berlin    </li></a>
                <a href="https://de.wikipedia.org/wiki/Lissabon">               <li>Lissabon  </li></a>
                <a href="https://de.wikipedia.org/wiki/London">                 <li>London    </li></a>
                <a href="https://de.wikipedia.org/wiki/Bogot%C3%A1">            <li>Bogota    </li></a>
            </div>
        </div>
    </div>
</div>


</body>
</html>


