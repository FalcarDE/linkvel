<?php

include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------------------------------------------------

$User = new CLoadingUserAccountID($_GET['FirstName'], $_GET['LastName'],$_GET['UserName'], $_GET['Email'] );
$User->getAccountID();

class CLoadingUserAccountID
{

    private $FirstName;
    private $LastName;
    private $UserName;
    private $Email;


    function __construct($FirstName, $LastName, $UserName, $Email )
    {
        $this->FirstName    = $FirstName;
        $this->LastName     = $LastName;
        $this->UserName     = $UserName;
        $this->Email        = $Email;
    }

    function getAccountID()
    {
        $Sql_Statement = CServerConnection::$DB_connection->prepare("select AccountKey from accountdetails AS ad
                                                                     INNER join user AS usr ON ad.AccountKey = usr.AccountRefKey
                                                                     INNER JOIN contactdetails AS cd ON usr.ContactRefKey = cd.ContactKey 
                                                                     where cd.FirstName     = '$this->FirstName'  
                                                                     OR cd.LastName         = '$this->LastName' 
                                                                     OR cd.Email            = '$this->Email' 
                                                                     OR ad.UserName         = '$this->UserName'; ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Statement);
        $Sql_Statement->execute();
        $specificUserAccountID= $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        echo $specificUserAccountID;
    }

}

?>





