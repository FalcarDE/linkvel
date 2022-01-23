<?php
//Created by @Hoang
include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------------------------------------------------

$User = new CSearchingUserID();
$User->getAccountID();


class CSearchingUserID
{

    private $FirstName;
    private $LastName;
    private $UserName;
    private $Email;
    private $SpecificUserAccountID;


    function __construct()
    {
        $this->FirstName    = ($_GET['FirstName']   ?? null);
        $this->LastName     = ($_GET['LastName']    ?? null);
        $this->UserName     = ($_GET['UserName']    ?? null);
        $this->Email        = ($_GET['Email']       ?? null);
    }

    function getAccountID()
    {
        $Sql_Statement = CServerConnection::$DB_connection->prepare("select AccountKey from accountdetails AS ad
                                                                     INNER join user AS usr ON ad.AccountKey = usr.AccountRefKey
                                                                     INNER JOIN contactdetails AS cd ON usr.ContactRefKey = cd.ContactKey 
                                                                     where 
                                                                    (cd.FirstName     = '$this->FirstName'  
                                                                     AND cd.LastName         = '$this->LastName') 
                                                                     OR (cd.Email            = '$this->Email' 
                                                                     AND ad.UserName         = '$this->UserName'); ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Statement);
        $Sql_Statement->execute();
        $this->SpecificUserAccountID= $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        echo $this->SpecificUserAccountID;
    }


    function getUserName()
    {
        include_once "../Backend/CUserDataLoading.php";
        $UserData = new CUserDataLoading();
        return $UserData::getUserName($this->SpecificUserAccountID);

    }
}




?>





