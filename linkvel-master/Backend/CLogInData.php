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

//--------------------------------------------------------------------------------------------------------------------------------------------------

$LoginSession = new CLoginVerify();
$LoginSession->getAccountKey();
$LoginSession->checkLogin();

class CLoginVerify
{
    private $CurrentUserName     = null;
    private $CurrentUserPassword = null;
    private $AccountKey          = null;


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
         * stripslashes() - method: remove and returns a string withou all backslashes and double backslashes are made into a single backslash (\)
         * trim() - method          returns a string without whitespace from the beginning and end of string
         * preventing from excute any scripts from a Formular Text field
         *
         * Example: ;?> <script>alert('hacked')</script> --> executing some java script in textfield
         *
         *  ========= IMPORTANT NOTE =========
         */

        $this->CurrentUserName          = stripslashes((trim(($_POST["UserName"]))));
        $this->CurrentUserPassword      = stripslashes((trim(($_POST["UserPassword"]))));
    }

    function getAccountKey()
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("select AccountKey from linkvel.accountdetails where UserName='$this->CurrentUserName'");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Statement);
        $Sql_Statement->execute();
        $this->AccountKey = $Sql_Statement->fetch(PDO::FETCH_ASSOC);
    }


    function checkLogin()
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("select Password from linkvel.accountdetails where UserName='$this->CurrentUserName'");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Statement);
        $Sql_Statement->execute();
        $results = $Sql_Statement->fetch();

       if(isset($results))
       {
           /* ========= IMPORTANT NOTE =========
            *
            * what does password_verify do?
            * check if the password result from the Database has the same Hash as the password input
            *
            *  ========= IMPORTANT NOTE =========
            */

           if (password_verify($this->CurrentUserPassword, $results[0]))
           {
               $_SESSION["AccountKey"] = $this->AccountKey ;
               $this->updateLastLogInTime(implode($_SESSION["AccountKey"]));
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


    function updateLastLogInTime($AccountKey)
    {
        date_default_timezone_set("MET");
        $DateTime = date("Y-m-d H:i:s", time());
        $Sql_Statement = CServerConnection::$DB_connection->query(" UPDATE user as usr 
                                                                    INNER JOIN accountdetails AS ad ON ad.AccountKey = usr.AccountRefKey  
                                                                    set usr.LastLogin_Date_Time = '$DateTime'
                                                                    WHERE ad.AccountKey = '$AccountKey';");

        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Statement);
        $Sql_Statement->execute();
    }
}
?>