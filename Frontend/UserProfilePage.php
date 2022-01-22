<!-- Created by @Duc Duong -->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Profilpage</title>
    <link rel="stylesheet" href="../CSS/ProfilPageStyle.css">

</head>

<body>
<!-------------------------- Navigation -------------------------------------------------------------------------------------------------------------------------------- -->

<?php include
"../Frontend/NavBar.php"
?>

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
                    <h5 id="permission">User-Rolle:
                        <?php
                        require_once('../Backend/CUserDataLoading.php');
                        echo CUserDataLoading::getUserRole(implode($_SESSION['AccountKey']));
                        ?>
                    </h5>
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




    <!---------------------------- Middle Container -->

    <div class="middle-container">

        <div class="profil-tag-box">
            <h2 id="profil-tag">Dein persönliches Profil</h2>
        </div>


        <div class="middle-container-box">

            <div class="left-side">
                <form id="UserData" class="input-group">
                    <!--
                    <label class="label">Geschlecht        </label>
                    <div class="input-field"> <h4 class="input-field-info"></h4></div>
                    -->


                    <label class="label">Vorname           </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');
                            echo CUserDataLoading::getUserFirstname(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>

                    <label class="label">Mittelname        </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');

                            $Midname  = CUserDataLoading::getUserMidname(implode($_SESSION['AccountKey']));

                            if(empty($Midname))
                            {
                                echo "-";
                            }
                            else
                            {
                                echo $Midname;

                            }

                            ?>
                        </h4>
                    </div>

                    <label class="label">Nachname          </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');
                            echo CUserDataLoading::getUserLastname(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>

                    <label class="label">Gebutsdatum       </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');
                            echo CUserDataLoading::getUserBirthDate(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>

                    <label class="label">Telefonnummer
                    </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');
                            echo CUserDataLoading::getUserTelNumber(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>

                </form>
            </div>

            <div class="right-side">
                <form id="register" class="input-group">
                    <label class="label">Adresse           </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');
                            echo CUserDataLoading::getUserAddress(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>

                    <label class="label">Postleitzahl      </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');

                            echo CUserDataLoading::getUserZipCode(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>

                    <label class="label">Land              </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');

                            echo CUserDataLoading::getUserCountry(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>

                    <label class="label">Benutzername      </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');

                            echo CUserDataLoading::getUserName(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>

                    <label class="label">Email             </label>
                    <div class="input-field">
                        <h4 class="input-field-info">
                            <?php
                            require_once('../Backend/CUserDataLoading.php');
                            echo CUserDataLoading::getUserEmail(implode($_SESSION['AccountKey']));
                            ?>
                        </h4>
                    </div>


                    <!--
                    <label class="label">Passwort          </label>           <div class="input-field"> <h4 class="input-field-info">-</h4></div>
                    -->

                </form>
            </div>
        </div>

        <!-- Buttom damit der User seine persönlichen Daten ändern kann -->
        <div class="middle-container-button-box">
            <form action="../Frontend/UserProfileEdit.php">
                <button  class="user-profile-edit">Profil bearbeiten</button>
            </form>
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
                <a href="https://de.wikipedia.org/wiki/Nairobi">                <li>Nairobi   </li></a>
                <a href="https://de.wikipedia.org/wiki/Helsinki">               <li>Helsinki  </li></a>
                <a href="https://de.wikipedia.org/wiki/Bogot%C3%A1">            <li>Bogota    </li></a>
            </div>

        </div>
    </div>
</div>








</body>
</html>