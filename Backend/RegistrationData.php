<?php
include_once ('CServerConnection.php');
include_once ('CExceptionHandler.php');

/*  Created by @Hoang
 *  class and methode declaration:
 *  Class CRegistrationVerify::setNewAccountDetails($pdoServer)
 *  Class CRegistrationVerify::getAccountDetailsKey($pdoServer)
 *  Class CRegistrationVerify::setContactDetails($pdoServer)
 *  Class CRegistrationVerify::setAdress($pdoServer)
 */

//--------------------------------------------------------------------------------------------------------------------------------------------------

Class CRegistrationVerify
{
    private $NewUserFirstName       ;
    private $NewUserMidName         ;
    private $NewUserLastName        ;
    private $NewUserName            ;
    private $NewUserEmail           ;
    private $NewUserPasswordHash    ;
    private $NewUserPhoneNumber     ;
    private $NewUserBirthdate       ;
    private $NewUserGender          ;
    private $NewUserStreetAddress   ;
    private $NewUserZipCode         ;
    private $NewUserCountry         ;

    function __construct()
    {
        $this->NewUserFirstName     = null;
        $this->NewUserMidName       = null;
        $this->NewUserLastName      = null;
        $this->NewUserName          = null;
        $this->NewUserEmail         = null;
        $this->NewUserPasswordHash  = null;
        $this->NewUserPhoneNumber   = null;
        $this->NewUserBirthdate     = null;
        $this->NewUserGender        = null;
    }

    function setNewUserAttribute($NewUserFirstName,$NewUserMidName,$NewUserLastName,$NewUserName,$NewUserEmail,$NewUserPasswordHash,$NewUserPhoneNumber, $NewUserBirthdate, $NewUserGender , $NewUserStreetAddress, $NewUserZipCode, $NewUserCountry)
    {
        $this->NewUserFirstName     = $NewUserFirstName     ;
        $this->NewUserMidName       = $NewUserMidName       ;
        $this->NewUserLastName      = $NewUserLastName      ;
        $this->NewUserName          = $NewUserName          ;
        $this->NewUserEmail         = $NewUserEmail         ;
        $this->NewUserPasswordHash  = $NewUserPasswordHash  ;
        $this->NewUserPhoneNumber   = $NewUserPhoneNumber   ;
        $this->NewUserBirthdate     = $NewUserBirthdate     ;
        $this->NewUserGender        = $NewUserGender        ;
        $this->NewUserStreetAddress = $NewUserStreetAddress ;
        $this->NewUserZipCode       = $NewUserZipCode       ;
        $this->NewUserCountry       = $NewUserCountry       ;
    }

    function ValidateEmail($Email)
    {
        if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            echo "Email address is considered as valid.\n";
            echo "<br>";
            return true;
        } else {
            echo "Email address is considered as invalid.\n";
            echo "<br>";
            return false;
        }
    }

    function ValidatePhoneNumber($PhoneNumber)
    {
        if ((preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im", $PhoneNumber))) {
            echo "Phonenumber is considered as valid.\n";
            echo "<br>";
            return true;
        } else {
            echo "Invalid Phonenumber!";
            echo "<br>";
            return false;
        }
    }


    function setNewAccountDetails($pdoServer)
    {
        // prepare() --> prepares a statement for execution and returns a statement object
        $Sql_Insertion_Statement = $pdoServer->prepare("INSERT INTO linkvel.accountdetails(UserName, Password) VALUES (?,?)");
        CExceptionHandler::DisplayPDOHandler($pdoServer, $Sql_Insertion_Statement);
        $Sql_Insertion_Statement->execute(array($this->NewUserName  , $this->NewUserPasswordHash));
    }

    function getAccountDetailsKey($pdoServer)
    {
        // prepare() --> prepares a statement for execution and returns a statement object
        $SqlKeyData = $pdoServer->prepare("Select AccountKey from linkvel.accountdetails where UserName = ? ");
        CExceptionHandler::DisplayPDOHandler($pdoServer,$SqlKeyData);
        $SqlKeyData->execute([$this->NewUserName]);
        $AccountKeys = $SqlKeyData->fetch(PDO::FETCH_ASSOC);
        foreach ($AccountKeys as $AccountKey )
        {
            echo "Der AccountKey ist: ".$AccountKey;
            echo "<br>";
            return $AccountKey;
        }
        echo "<br>";
    }

    function setContactDetails($pdoServer)
    {
        // prepare() --> prepares a statement for execution and returns a statement object
        $Sql_Insertion_Statement = $pdoServer->prepare("INSERT INTO linkvel.ContactDetails(FirstName, Midname, LastName, Email, Phonenumber, Birthday,Gender,StreetAddress, ZipCode, Country) VALUES (?,?,?,?,?,?,?,?,?,?)");
        CExceptionHandler::DisplayPDOHandler($pdoServer, $Sql_Insertion_Statement);
        $Sql_Insertion_Statement->execute(array($this->NewUserFirstName,$this->NewUserMidName,$this->NewUserLastName, $this->NewUserEmail,  $this->NewUserPhoneNumber, $this->NewUserBirthdate, $this->NewUserGender, $this->NewUserStreetAddress, $this->NewUserZipCode, $this->NewUserCountry));

    }

    function getContactDetailsKey($pdoServer)
    {
        $SqlKeyData = $pdoServer->prepare("Select ContactKey from linkvel.ContactDetails where FirstName = ? AND LastName = ? AND Email = ? AND Phonenumber= ?");
        CExceptionHandler::DisplayPDOHandler($pdoServer, $SqlKeyData);
        $SqlKeyData->execute([$this->NewUserFirstName,$this->NewUserLastName, $this->NewUserEmail,  $this->NewUserPhoneNumber]);
        $ContactDetailsKeys = $SqlKeyData->fetch(PDO::FETCH_ASSOC);
        foreach ($ContactDetailsKeys as $ContactDetailsKey )
        {
            echo "Der ContactKey ist: ".$ContactDetailsKey;
            echo "<br>";
            return $ContactDetailsKey;
        }
    }
}

//--------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========

$ServerSession   = new CServerConnection("localhost","root", "");
$pdoServer = $ServerSession::connectServer();

//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------------------

/* ========= IMPORTANT NOTE =========
 *
 * Why Post instead of Get?
 * - Using Post display only the directory to the script
 * - Using Get display all the information that stored in the global - GET variable
 *
 * When do I use POST and GET?
 * - POST-method for critical formulars or personal information
 * - GET -method for non-critical pages without any personal information
 *
 * Why do I need to use stripslashes() and trim()-method?
 * stripslashes() - method: remove and returns a string without all backslashes and double backslashes are made into a single backslash (\)
 * trim() - method        : returns a string without whitespace from the beginning and end of string
 * preventing from execute any scripts from a formular textfield
 *
 * Example: ;?> <script>alert('hacked')</script> --> executing some java script in textfield
 *
 *  ========= IMPORTANT NOTE =========
 */
$NewUserFirstName               = stripslashes((trim(($_POST['FirstName']))));
$NewUserMidName                 = stripslashes((trim(($_POST['MidName']))));
$NewUserLastName                = stripslashes((trim(($_POST['LastName']))));
$NewUserName                    = stripslashes((trim(($_POST['UserName']))));
$NewUserEmail                   = stripslashes((trim(($_POST['Email']))));
$NewUserPassword                = stripslashes((trim(($_POST['Password']))));
$NewUserPhoneNumber             = stripslashes(($_POST['Phonenumber']));
$NewUserBirthdate               = stripslashes((date('Y-m-d', strtotime($_POST['Birthdate']))));
$NewUserGender                  = stripslashes((trim(($_POST['Gender']))));
$NewUserStreetAddress           = stripslashes((trim(($_POST['StreetAddress']))));
$NewUserZipCode                 = stripslashes((trim(($_POST['ZipCode']))));
$NewUserCountry                 = stripslashes((trim(($_POST['Country']))));

//--------------------------------------------------------------------------------------------------------------------------------------------------
 /* ========= IMPORTANT NOTE =========
 *
 * Why do I need to hash the Password Data before insert into the database?
 * - hasing is an important aspect for security of your database
 * - without hashing hackers are able to steal the data from a person easily after they break into a Database
 * - hackers can do real big damage to a person and steal their personal account
 * - they can use the unhashed password to log into an account and steal your identity
 * - after they steal your identity, they can make huge financial damage or even using your identity for criminal activities on the internet
 * - it is really hard to find those hackers and arrest them
 *
 * How to avoid the identity theft from a database?
 * - you can't prevent 100% a hack and identity theft
 * - but you can make the process of hacking data much more painful and complex
 * - if you use hashing algorithm
 *
 *  ========= IMPORTANT NOTE =========
 *
 */
//--------------------------------------------------------------------------------------------------------------------------------------------------

$NewUserPasswordHash    = Password_hash($NewUserPassword, PASSWORD_BCRYPT);
$NewSuperUser           = new CRegistrationVerify();

if($NewSuperUser->ValidateEmail($NewUserEmail) && $NewSuperUser->ValidatePhoneNumber($NewUserPhoneNumber))
{
    $NewSuperUser->setNewUserAttribute($NewUserFirstName,$NewUserMidName,$NewUserLastName,$NewUserName,$NewUserEmail,$NewUserPasswordHash,$NewUserPhoneNumber, $NewUserBirthdate, $NewUserGender , $NewUserStreetAddress, $NewUserZipCode, $NewUserCountry);
    $NewSuperUser->setNewAccountDetails($pdoServer);
    $NewSuperUser->setContactDetails($pdoServer);
    session_start();
    header('Location: ../Frontend/SucessfulRegistration.php');
    exit();
}
else
{
    echo("Registrierung war nicht erfolgreich! Bitte geben Sie ihre Daten neu ein!");
    echo "<br>";
    die ('<a href="/Frontend/Login_Registration_Formular.html"> Back to Registration Formular </a>');
}

//$getAccountDetailsKey   = $NewSuperUser->getAccountDetailsKey($pdoServer);
//$getContactDetailsKey   = $NewSuperUser->getContactDetailsKey($pdoServer);
//--------------------------------------------------------------------------------------------------------------------------------------------------

?>



