<?php
/*
 * Created by @Hoang
 */
include_once('CServerConnection.php');
include_once('CExceptionHandler.php');
session_start();

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

class CLoginVerify
{
    private $CurrentUserName     = null;
    private $CurrentUserPassword = null;


    function __construct($CurrentUserName, $CurrentUserPassword)
    {
        $this->CurrentUserName      = $CurrentUserName;
        $this->CurrentUserPassword  = $CurrentUserPassword;
    }

    function getAccountKey($UserName)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("select AccountKey from linkvel.accountdetails where UserName='$this->CurrentUserName'");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Statement);
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_ASSOC);
    }


    function checkLogin($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("select Password from linkvel.accountdetails where UserName='$this->CurrentUserName'");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Statement);
        $Sql_Statement->execute();
        $results = $Sql_Statement->fetch();

       if(isset($results))
       {
           //$hash = substr( $results[0], 0, 60 );
           if (password_verify($this->CurrentUserPassword, $results[0]))
           {
               $_SESSION["AccountKey"] = $AccountKey ;
               header('Location: ../Frontend/LandingPage.php');
               exit();
           }
           else
           {
               header('Location: ../Frontend/FailedLogIn.php');
               exit();
           }
       }

    }
}

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
 * stripslashes() - method: remove and returns a string withou all backslashes and double backslashes are made into a single backslash (\)
 * trim() - method          returns a string without whitespace from the beginning and end of string
 * preventing from excute any scripts from a Formular Text field
 *
 * Example: ;?> <script>alert('hacked')</script> --> executing some java script in textfield
 *
 *  ========= IMPORTANT NOTE =========
 */
$CurrentUserName        = stripslashes((trim(($_POST["UserName"]))));
$CurrentUserPassword    = stripslashes((trim(($_POST["UserPassword"]))));

$LoginSession = new CLoginVerify($CurrentUserName, $CurrentUserPassword);
$AccountKey = $LoginSession->getAccountKey($CurrentUserName);
$LoginSession->checkLogin($AccountKey);

//--------------------------------------------------------------------------------------------------------------------------------------------------

?>