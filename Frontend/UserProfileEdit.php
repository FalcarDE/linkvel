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
                    $UserData   =   new CUserDataLoading();
                    $FirstName  =   $UserData::getUserFirstname(implode($_SESSION['AccountKey']));
                    $Midname    =   $UserData::getUserMidname(implode($_SESSION['AccountKey']));
                    $LastName   =   $UserData::getUserLastname(implode($_SESSION['AccountKey']));

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

    <div class="right-container">

        <div class="profil-tag-box">
            <h1 id="profil-tag">Profil-Daten bearbeiten</h1>
        </div>


        <div class="right-container-box">


            <!-- In den Placeholder sollen dir Daten, die schon vorhanden sind rein  -->

            <div class="form-box">
                <form id="register" method="post" action="../Backend/CUserDataEdit.php" class="input-group">

                    <div class="form-box-left">

                        <label class="label">Vorname             </label>        <input autocomplete="on"       class="input-field"        name="FirstName"         type="text"         placeholder='<?php
                        require_once('../Backend/CUserDataLoading.php');
                        $UserData = new CUserDataLoading();
                        echo $UserData::getUserFirstname(implode($_SESSION['AccountKey']));
                        ?>'>

                        <label class="label">Mittelname          </label>        <input autocomplete="on"       class="input-field"        name="MidName"           type="text"         placeholder='<?php
                        require_once('../Backend/CUserDataLoading.php');
                        $UserData = new CUserDataLoading();
                        $Midname  = $UserData::getUserMidname(implode($_SESSION['AccountKey']));
                        if(empty($Midname))
                        {echo "-";}
                        else
                        {echo $Midname;}
                        ?>'>


                        <label class="label">Nachname            </label>        <input autocomplete="on"       class="input-field"        name="LastName"          type="text"         placeholder='<?php
                        require_once('../Backend/CUserDataLoading.php');
                        $UserData = new CUserDataLoading();
                        echo $UserData::getUserLastname(implode($_SESSION['AccountKey']));
                        ?>'>

                        <label class="label">Adresse             </label>        <input autocomplete="on"       class="input-field"        name="StreetAddress"     type="text"         placeholder='<?php
                        require_once('../Backend/CUserDataLoading.php');
                        $UserData = new CUserDataLoading();
                        echo $UserData::getUserAddress(implode($_SESSION['AccountKey']));
                        ?>'>

                    </div>


                    <div class="form-box-right">
                        <label class="label">Postleitzahl        </label>        <input autocomplete="on"       class="input-field"        name="ZipCode"           type="number"       placeholder='<?php
                        require_once('../Backend/CUserDataLoading.php');
                        $UserData = new CUserDataLoading();
                        echo $UserData::getUserZipCode(implode($_SESSION['AccountKey']));
                        ?>'>

                        <label class="label">Land                </label>        <input autocomplete="on"       class="input-field"        name="Country"           type="text"         placeholder='<?php
                        require_once('../Backend/CUserDataLoading.php');
                        $UserData = new CUserDataLoading();
                        echo $UserData::getUserCountry(implode($_SESSION['AccountKey']));
                        ?>'>

                        <label class="label">Email               </label>        <input autocomplete="on"       class="input-field"        name="Email"             type="email"        placeholder='<?php
                        require_once('../Backend/CUserDataLoading.php');
                        $UserData = new CUserDataLoading();
                        echo $UserData::getUserEmail(implode($_SESSION['AccountKey']));
                        ?>'>

                        <label class="label">Passwort            </label>        <input autocomplete="on"       class="input-field"        name="Password"          type="password"     placeholder=''>

                    </div>


                    <div class="right-container-button-box">
                        <button type="submit" class="save-button">Speicher</button>

                        <!--
                        Das Problem hier ist, dass man auf das Wort "zurück" drücken muss um auf die andere Seite zu kommen!
                           <button type="button" class="back-button"><a href="../Frontend/profil.php">Zurück</a></button>
                           -->
                    </div>
                </form>

                <div class="right-container-button-box">

                    <form action="../Frontend/UserProfilePage.php">
                        <button type="submit class" class="back-button">Zurück</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>


