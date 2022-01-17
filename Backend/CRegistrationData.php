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

//========= Server Connection =========

$ServerSession   = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();

//========= Server Connection =========

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
    private $AccountKey             ;
    private $UserKey                ;
    private $ContactKey             ;




    function __construct()
    {

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

        $this->NewUserFirstName                 = stripslashes((trim(($_POST['FirstName']))));
        $this->NewUserMidName                   = stripslashes((trim(($_POST['MidName']))));
        $this->NewUserLastName                  = stripslashes((trim(($_POST['LastName']))));
        $this->NewUserName                      = stripslashes((trim(($_POST['UserName']))));
        $this->NewUserEmail                     = stripslashes((trim(($_POST['Email']))));

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

        $this->NewUserPasswordHash              = Password_hash(stripslashes((trim(($_POST['Password'])))),PASSWORD_BCRYPT);
        $this->NewUserPhoneNumber               = stripslashes(($_POST['Phonenumber']));
        $this->NewUserBirthdate                 = stripslashes((date('Y-m-d', strtotime($_POST['Birthdate']))));
        $this->NewUserGender                    = stripslashes((trim(($_POST['Gender']))));
        $this->NewUserStreetAddress             = stripslashes((trim(($_POST['StreetAddress']))));
        $this->NewUserZipCode                   = stripslashes((trim(($_POST['ZipCode']))));
        $this->NewUserCountry                   = stripslashes((trim(($_POST['Country']))));


    }




    static function ValidateEmail($Email)
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

    static function ValidatePhoneNumber($PhoneNumber)
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


    function setNewAccountDetails()
    {
        // prepare() --> prepares a statement for execution and returns a statement object
        $Sql_Insertion_Statement = CServerConnection::$DB_connection->prepare("INSERT INTO linkvel.accountdetails(UserName, Password) VALUES (?,?)");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection,$Sql_Insertion_Statement);
        $Sql_Insertion_Statement->execute(array($this->NewUserName  , $this->NewUserPasswordHash));
    }

    function setContactDetails()
    {
        // prepare() --> prepares a statement for execution and returns a statement object
        $Sql_Insertion_Statement = CServerConnection::$DB_connection->prepare("INSERT INTO linkvel.ContactDetails(FirstName, Midname, LastName, Email, Phonenumber, Birthday,Gender,StreetAddress, ZipCode, Country) VALUES (?,?,?,?,?,?,?,?,?,?)");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Insertion_Statement);
        $Sql_Insertion_Statement->execute(array($this->NewUserFirstName,$this->NewUserMidName,$this->NewUserLastName, $this->NewUserEmail,  $this->NewUserPhoneNumber, $this->NewUserBirthdate, $this->NewUserGender, $this->NewUserStreetAddress, $this->NewUserZipCode, $this->NewUserCountry));

    }

    function getAccountKey()
    {
        // prepare() --> prepares a statement for execution and returns a statement object
        $SqlKeyData = CServerConnection::$DB_connection->prepare("Select AccountKey from linkvel.accountdetails where UserName = ? ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection,$SqlKeyData);
        $SqlKeyData->execute([$this->NewUserName]);
        return $this->AccountKey = $SqlKeyData->fetchColumn();
    }


    function getUserKey()
    {
        // prepare() --> prepares a statement for execution and returns a statement object
        $SqlKeyData = CServerConnection::$DB_connection->prepare(" Select usr.UserKey from user AS usr 
                                                                  INNER JOIN accountdetails ad ON ad.AccountKey = usr.AccountRefKey
                                                                  where ad.UserName = '$this->NewUserName'; ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $SqlKeyData);
        $SqlKeyData->execute();
        return $this->UserKey = $SqlKeyData->fetchColumn();

    }

    function getContactKey()
    {
        // prepare() --> prepares a statement for execution and returns a statement object
        $SqlKeyData = CServerConnection::$DB_connection->prepare("SELECT cd.ContactKey from contactdetails AS cd where cd.Email = '$this->NewUserEmail' and cd.FirstName = '$this->NewUserFirstName' AND cd.LastName = '$this->NewUserLastName'; ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $SqlKeyData);
        $SqlKeyData->execute();
        return $this->ContactKey = $SqlKeyData->fetchColumn();

    }


    function setUserData()
    {
        date_default_timezone_set("MET");
        $DateTime = date("Y-m-d H:i:s", time());
        $Sql_Insertion_Statement = CServerConnection::$DB_connection->prepare(" INSERT INTO user(ContactRefKey , AccountRefKey , Account_Create_Date_Time, LastLogIn_Date_Time) VALUES (?,?, ?, ?) ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection,$Sql_Insertion_Statement);
        $Sql_Insertion_Statement->execute([$this->ContactKey, $this->AccountKey,$DateTime, $DateTime ]);
    }



    function setUserRole()
    {
        $Sql_Insertion_Statement = CServerConnection::$DB_connection->prepare(" INSERT INTO standarduser(UserRefKey , StandardUserToken) VALUES (?,?) ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection,$Sql_Insertion_Statement);
        $Sql_Insertion_Statement->execute([$this->UserKey , 1]);
    }



}


//--------------------------------------------------------------------------------------------------------------------------------------------------




if(CRegistrationVerify::ValidateEmail($_POST['Email']) && CRegistrationVerify::ValidatePhoneNumber($_POST['Phonenumber']))
{
    $NewUser = new CRegistrationVerify();
    $NewUser->setNewAccountDetails();
    $NewUser->setContactDetails();
    $NewUser->getAccountKey();
    $NewUser->getContactKey();
    $NewUser->setUserData();
    $NewUser->getUserKey();
    $NewUser->setUserRole();
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



