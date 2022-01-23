<?php

/*
 * Created by @Duong
*/

session_start();

ini_set('memory_limit', '1 GB');

include_once('../Backend/CServerConnection.php');
include_once('../Backend/CExceptionHandler.php');
include_once('../Backend/CEditDataOfUser.php');

//============= Server Connection =============
$ServerSession = new CServerConnection("localhost","root", "");
$pdoServer = $ServerSession::connectServer();
//============= Server Connection =============


//----------------------------------------------------------------------------------------------------------------------


$InstanzOfCUserDataEdit = new CUserDataEdit();
$UpadateUser = new CEditDataOfUser();


$UpadateUser->updateFirstName       (CUserDataEdit::getFirstName()        , CUserDataEdit::getAccountKey());
$UpadateUser->updateMidName         (CUserDataEdit::getMidName()          , CUserDataEdit::getAccountKey());
$UpadateUser->updateLastName        (CUserDataEdit::getLastName()         , CUserDataEdit::getAccountKey());
$UpadateUser->updateStreetAddress   (CUserDataEdit::getStreetAddress()    , CUserDataEdit::getAccountKey());
$UpadateUser->updateZipCode         (CUserDataEdit::getZipCode()          , CUserDataEdit::getAccountKey());
$UpadateUser->updateCountry         (CUserDataEdit::getCountry()          , CUserDataEdit::getAccountKey());
$UpadateUser->updateEmail           (CUserDataEdit::getEmail()            , CUserDataEdit::getAccountKey());
$UpadateUser->updatePassword        (CUserDataEdit::getPassword()         , CUserDataEdit::getAccountKey());


header('Location: ../Frontend/Sucessfull_UserDataEdit.php');


Class CUserDataEdit
{
    private static $NewFirstName;
    private static $NewMidName;
    private static $NewLastName;
    private static $NewStreetAddress;

    private static $NewZipCode;
    private static $NewCountry;
    private static $NewEmail;
    private static $NewPassword;

    private static $AccountKey;

    // private $NewGender           ; => Is not changeable and is not displayed!
    // private $NewBirthdate        ; => Is not changeable and is not displayed!
    // private $NewUserName         ; => Is not changeable and is not displayed!
    // private $NewEmail            ; => Is not changeable and is not displayed!


    function __construct()
    {
        self::$NewFirstName = stripslashes((trim(($_POST['FirstName']))));
        self::$NewMidName = stripslashes((trim(($_POST['MidName']))));
        self::$NewLastName = stripslashes((trim(($_POST['LastName']))));
        self::$NewStreetAddress = stripslashes((trim(($_POST['StreetAddress']))));

        self::$NewZipCode = stripslashes((trim(($_POST['ZipCode']))));
        self::$NewCountry = stripslashes((trim(($_POST['Country']))));
        self::$NewEmail = stripslashes((trim(($_POST['Email']))));
        self::$NewPassword = Password_hash(stripslashes((trim(($_POST['Password'])))), PASSWORD_BCRYPT);


        // implode wandelt arrays in Strings um
        self::$AccountKey = implode($_SESSION ['AccountKey']);
    }



    /* ========== Getter ========== */

    public static function getFirstName()
    {
        return self::$NewFirstName;
    }


    public static function getMidName()
    {
        return self::$NewMidName;
    }

    public static function getLastName()
    {
        return self::$NewLastName;
    }

    public static function getStreetAddress()
    {
        return self::$NewStreetAddress;
    }

    public static function getZipCode()
    {
        return self::$NewZipCode;
    }

    public static function getCountry()
    {
        return self::$NewCountry;
    }

    public static function getEmail()
    {
        return self::$NewEmail;
    }

    public static function getPassword()
    {
        return self::$NewPassword;
    }

    public static function getAccountKey()
    {
        return self::$AccountKey;
    }


}
?>


