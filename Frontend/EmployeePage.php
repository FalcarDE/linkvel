<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mitarbeiter-Bereich</title>
    <link rel="stylesheet" href="../CSS/EmployeePage_Style.css">
    <script src="../Frontend/EmployeePage.js"></script>
</head>
<body>


<?php include '../Frontend/NavBar.html'?>

    <!-------------------------- TOP Container -------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="top-container">
        <div class="top-container-head">Mitarbeiter - Bereich</div>

        <div class="top-box">

            <div class="top-box-container">

                <div class="left-side">

                    <div class="left-side-input">
                        <form id="register" class="input-group">
                            <label class="label">Vorname        </label>           <input autocomplete="on"        class="input-field"        name="FirstName"   id="FirstName"     type="text">
                            <label class="label">Nachname       </label>           <input autocomplete="on"        class="input-field"        name="LastName"    id="LastName"      type="text">
                            <label class="label">Benutzername   </label>           <input autocomplete="on"        class="input-field"        name="UserName"    id="UserName"      type="text">
                            <label class="label">Email          </label>           <input autocomplete="on"        class="input-field"        name="Email"       id="Email"         type="email">
                        </form>
                    </div>
                </div>


                <div class="right-side">
                    <div class="right-side-box">
                        <div class="output-field" >
                            <h4 id="OutPutAccountID"> AccountID </h4>
                        </div>

                        <div class="button-box">
                            <button type="submit" class="submit-button" onclick="getAccountID();"> AccountID  suchen</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <!-------------------------- Middle Container -------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="middle-container">


        <div class="id-input">
            <form action="../Backend/UserDataLoading.php" method="post">
            <label class="label">Hier die AccountID : </label>
                <input      class="id-input-field"      name="InputAccountID"     required    type="text" > </input>e
            </form>
        </div>



        <div class="middle-container-button-box">
            <button type="submit" class="user-search-button">User-Daten suchen</button>
        </div>

        <div class="middle-container-button-box">
            <button type="submit" class="user-search-button">User-Daten speichern</button>
        </div>
    </div>






    <!-------------------------- Middle Container -------------------------------------------------------------------------------------------------------------------------------- -->


    <div class="bottom-container">
        <div class="bottom-container-box">

            <div class="bottom-container-left">
                <div class="profile-box">
                    <img class="profile-img" src="../image/mbappe.jpg" alt="Profil-Bild">
                </div>


                <div class="underline">
                    <h3 id="profile-name">Vorname Nachname</h3>
                    <div class="profil-roll-box">
                        <h5 id="permission">User-Rolle</h5>
                    </div>
                    <div class="last-login-box">
                        <h5 id="last-login-time">zuletzt online: gestern</h5>
                    </div>
                </div>
            </div>




    <!-------------------------- Bottom Container -------------------------------------------------------------------------------------------------------------------------------- -->


            <div class="bottom-container-right">


                    <div class="profil-tag-box">
                        <h1 id="profil-tag">Persönliches Profil </h1>
                    </div>


                <div class="bottom-container-right-box">


                    <!-- User-Rolle: 2 inputs Standard-User und Super-User-->
                    <div class="bottom-container-right-box-left">
                        <form class="container-input" method="post" >
                            <label class="bottom-container-label">
                                Geschlecht:
                                <?php
                                    include_once ("../Backend/UserDataLoading.php");
                                    $UserData = new CUserDataLoading();
                                    $AccountID = $UserData::getAccountIDEmployeePage();
                                    $UserData::getUserName($AccountID);
                                ?>
                            </label>

                            <input class="container-input-field" name="Gender">    </input>



                            <label class="bottom-container-label">Vorname: Kylian                    </label>            <input class="container-input-field">     </input>
                            <label class="bottom-container-label">Mittelname: -                      </label>            <input class="container-input-field">    </input>
                            <label class="bottom-container-label">Nachname: Mbappe                   </label>            <input class="container-input-field">    </input>
                            <label class="bottom-container-label">Gebutsdatum: 20.12.1998            </label>            <input class="container-input-field">    </input>
                            <label class="bottom-container-label">Telefonnummer: 0176 420472023      </label>            <input class="container-input-field">     </input>
                            <label class="bottom-container-label">Standard-User: ?                   </label>            <input class="container-input-field">    </input>
                        </form>
                    </div>


                    <!-- container-input-field-info-->
                    <div class="bottom-container-right-box-right">
                        <form class="container-input">
                            <label class="bottom-container-label">Adresse: -                         </label>           <input class="container-input-field"> </input>
                            <label class="bottom-container-label">Postleitzahl: -                    </label>           <input class="container-input-field"> </input>
                            <label class="bottom-container-label">Land: -                            </label>           <input class="container-input-field"> </input>
                            <label class="bottom-container-label">Benutzername: -                    </label>           <input class="container-input-field"> </input>
                            <label class="bottom-container-label">Email: -                           </label>           <input class="container-input-field"> </input>
                            <label class="bottom-container-label">Passwort: -                        </label>           <input class="container-input-field"> </input>
                            <label class="bottom-container-label">Super-User: ?                      </label>           <input class="container-input-field"> </input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>