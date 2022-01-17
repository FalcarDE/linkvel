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
<?php
include "../Frontend/NavBar.php"
?>

<!--------------------------------------------------------------------------------------------------------------->
<div class="container_1">


            <!--------------------------------------------------------------------------------------------------------------->

            <div class="left-part">
                <div class="profile-image">
                    <img class="profile-image-input" src="../image/mbappe.jpg" alt="profil-image">
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
                        <h5 id="permission">
                            User-Rolle:
                                <?php
                                    require_once('../Backend/CUserDataLoading.php');
                                    echo CUserDataLoading::getUserRole(implode($_SESSION['AccountKey']));
                                ?>
                        </h5>
                    </div>
                    <div class="last-login-box">
                        <h5 id="last-login-time">
                            zuletzt online:
                            <?php
                            require_once('../Backend/CUserDataLoading.php');
                            echo CUserDataLoading::getUserLastLogIn(implode($_SESSION['AccountKey']));
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <!-- ----------------------------------------------------------------------------------------------------------- -->

            <div class="mid-part">

                <div class="mid-box">

                    <div class="profil-tag-box">
                        <h2 id="profil-tag">Dein persönliches Profil</h2>
                    </div>


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
                                </h4></div>
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

                            <label class="label">Telefonnummer     </label>
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
                        <form id="UserAddressData" class="input-group">

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
                                </h4></div>

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
                                        $UserData = new CUserDataLoading();
                                        echo $UserData::getUserName(implode($_SESSION['AccountKey']));
                                    ?>
                                </h4>
                            </div>

                            <label class="label">Email             </label>
                            <div class="input-field">
                                <h4 class="input-field-info">
                                    <?php
                                        require_once('../Backend/CUserDataLoading.php');
                                        $UserData = new CUserDataLoading();
                                        echo $UserData::getUserEmail(implode($_SESSION['AccountKey']));
                                    ?>
                                </h4>
                            </div>

                            <!--
                            <label class="label">Passwort          </label>           <div class="input-field"> <h4 class="input-field-info">-</h4></div>
                            -->
                        </form>
                    </div>

                </div>

            </div>

            <!------------------------------------------------------------------------------------------------------------- -->

            <div class="right-part">
                <div class="post-link-box">
                    <h3 id="headline-link-box">Hier war ich im Urlaub:</h3>

                    <!-- Hier kommen die Verlinkungen zu den Posts, die der SuperUser erstellt hat -->
                    <div class="post-link">
                        <a href="https://de.wikipedia.org/wiki/Rom">                      <li>Rom</li></a>
                        <a href="https://de.wikipedia.org/wiki/Volksrepublik_China">      <li>China</li></a>
                        <a href="https://de.wikipedia.org/wiki/Vereinigte_Staaten">       <li>USA</li></a>
                        <a href="https://de.wikipedia.org/wiki/Berlin">                   <li>Berlin</li></a>
                    </div>

                </div>
            </div>


    <!------------------------------------------------------------------------------------------------------------- -->

    <!-- Buttom damit der User seine persönlichen Daten ändern kann -->
    <div class="middle-container-button-box">
        <button type="submit" class="user-profile-edit">Profil bearbeiten</button>
    </div>

</div>


</body>
</html>