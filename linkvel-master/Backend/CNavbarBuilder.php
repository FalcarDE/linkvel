<?php
include_once ("../Backend/CServerConnection.php");
include_once ("../Backend/CUserDataLoading.php");


class CNavBarBuilder
{

    public static function viewAdmin()  /*View of the navigation bar when the admin is logged in*/
    {
        echo(

            "<div id='top'>"

            . "<nav class='navigation_bar'>"
            . "<div class='list'>"
            . "<li><a href='../Frontend/LandingPage.php'>STARTSEITE</a></li>"
            . "<li><a href='../Frontend/EmployeePage.php'>MEIN KONTO</a>"
            . "<li><a href='../Backend/logout.php'>LOGOUT</a></li>"
            . "</div>"
            . "</li>"
            . "</nav>"
            . "</div>"
        );
    }

    public static function viewLoggedIn() /*View of the navigation bar when user/super-user is logged in*/
    {
        echo(

            "<div id='top'>"

            . "<nav class='navigation_bar'>"
            . "<div class='list'>"
            . "<li><a href='../Frontend/LandingPage.php'>STARTSEITE</a></li>"
            . "<li><a href='#'>MEIN KONTO</a>"
            . "<div class='dropdown'>"
            . "<ul>"
            . "<li><a href='../Backend/UserProfilValidation.php'>PROFIL ANSEHEN</a></li>"
            . "<li><a href='#'>PROFIL BEARBEITEN</a></li>"
            . "</ul>"
            . "</div>"
            . "<li><a href='../Frontend/Login_Registration_Formular.html'>LOGIN</a></li>"
            . "</div>"
            . "</li>"
            . "</nav>"
            . "</div>"
        );

    }

    public static function viewLoggedOut() /*View of the navigation bar when nobody is logged in*/
    {
        echo(

            "<div id='top'>"

            . "<nav class='navigation_bar'>"
            . "<div class='list'>"
            . "<li><a href='../Frontend/LandingPage.php'>STARTSEITE</a></li>"
            . "<li><a href='#'>MEIN KONTO</a>"
            . "<div class='dropdown'>"
            . "<ul>"
            . "<li><a href='../Frontend/UserProfilPage.php'>PROFIL ANSEHEN</a></li>"
            . "<li><a href='#'>PROFIL BEARBEITEN</a></li>"
            . "</ul>"
            . "</div>"
            . "<li><a href='../Backend/logout.php'>LOGOUT</a></li>"
            . "</div>"
            . "</li>"
            . "</nav>"
            . "</div>"
        );
    }


    public static function chooseUsername()
    {
        if (!empty($_SESSION['AccountKey']))
        {

            $Firstname=CUserDataLoading::getUserFirstname(implode($_SESSION['AccountKey']));
           echo("<p class='Username'>Hallo,".$Firstname."!</p>");
        }
        else
        {
            echo("<p class='Username'>Hallo, du!</p>");
        }
    }


    public static function chooseNavView()
    {


        if(!empty($_SESSION['AccountKey']))
        {
            $AccountKey = implode($_SESSION['AccountKey']);
            $ServerSession   = new CServerConnection("localhost","root", "");
            $pdoServer = $ServerSession::connectServer();
            $AdminKey = $pdoServer->query("SELECT EmployeeKey from employee e INNER JOIN accountdetails a ON e.AccountRefKey = a.AccountKey WHERE a.AccountKey='$AccountKey'");


            $AdminKey->fetchAll(PDO::FETCH_ASSOC);

            if(!isset($AdminKey)) {
                self::viewAdmin();
            }

            else{
                self::viewLoggedOut();
            }
        }

        else
        {
            self:: viewLoggedIn();
        }
    }
}