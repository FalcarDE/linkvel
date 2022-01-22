
<!-- Created by @Duc Duong -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mitarbeiter-Bereich</title>
    <link rel="stylesheet" href="../CSS/EmployeePage_Style.css">
    <script src="../Frontend/EmployeePage.js"></script>
    <script src="../Frontend/Login_Registration_Formular.js"></script>
</head>
<body>

<!-------------------------- Nav Container -------------------------------------------------------------------------------------------------------------------------------- -->

<div class="nav-bar-container">
    <?php include '../Frontend/NavBar.php'?>
</div>


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


<div class="middle-container" >

    <div class="search-part">

        <div class="id-input">
        <label      class="label"                          >Hier die AccountID :                     </label>
        <input      class="input-field" id="IDInputfield"   name="InputAccountID"     required    type="text" >
        <button     type="submit"                           class="user-search-button"  onclick="getUserDataSet()">User-Daten suchen           </button>
        </div>

        <div class="middle-container-button-box">
            <button onclick="editUserData()" class="user-search-button"> User Daten speichern </button>
        </div>

        <div class="id-input">
            <label      class="label"                          >Hier die PostID eingeben :                                                  </label>
            <input      class="input-field" id="PostID"   name="InputAccountID"     required    type="text" >
            <button     class="user-search-button"  onclick="validateEmail(document.)   deletePost()"> Post löschen         </button>
        </div>


    </div>

    <div class="middle-container-output-box" id="middle-container-output-box"></div>
</div>



<!-------------------------- Lower-Part Container -------------------------------------------------------------------------------------------------------------------------------- -->


<div class="bottom-container">

        <div class="bottom-container-box" >


                  <div  class="bottom-container-right" >
                         <label class="bottom-container-label">Geschlecht:          <br>                   </label>       <input type="text" id="InputGender"> </input>         <br>
                         <label class="bottom-container-label">Vorname:             <br>                   </label>       <input type="text" id="InputFirstName"> </input>      <br>
                         <label class="bottom-container-label">Mittelname:          <br>                   </label>       <input type="text" id="InputMidName"> </input>        <br>
                         <label class="bottom-container-label">Nachname:            <br>                   </label>       <input type="text" id="InputLastName"> </input>       <br>
                         <label class="bottom-container-label">Gebutsdatum:         <br>                   </label>       <input type="date" id="InputBirthDate"> </input>      <br>
                         <label class="bottom-container-label">Telefonnummer:       <br>                   </label>       <input name="InputTel" type="number" id="InputTel"> </input>          <br>
                         <label class="bottom-container-label">Standard-User:       <br>                   </label>       <input type="number" id="InputStandardUser"> </input> <br>
                  </div

                  <div class="bottom-container-left">
                         <label class="bottom-container-label">Adresse:      <br>                     </label>       <input type="text" id="InputAddress">        <br>
                         <label class="bottom-container-label">Postleitzahl: <br>                     </label>       <input type="text" id="InputPlz">            <br>
                         <label class="bottom-container-label">Land:         <br>                     </label>       <input type="text" id="InputCountry">        <br>
                         <label class="bottom-container-label">Benutzername: <br>                     </label>       <input type="text" id="InputUserName">       <br>
                         <label class="bottom-container-label">Email:        <br>                     </label>       <input type="Email" id="InputEmail">         <br>
                         <label class="bottom-container-label">Passwort:     <br>                     </label>       <input type="password" id="InputPassword">   <br>
                         <label class="bottom-container-label">Super-User:   <br>                     </label>       <input type="number" id="InputSuperUser">    <br>
                  </div>
        </div>


        <div id="result-bottom-container-box"" > </div>
</div>
</body>
</html>