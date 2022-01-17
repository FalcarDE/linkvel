<?php
session_start();
include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------------------


$UpdatingLikes = new CUpdatingLikes();
$UpdatingLikes->getPostKey();
$UpdatingLikes->getUserKey();
$UpdatingLikes->checkIfPostIsAlreadySet();

class CUpdatingLikes
{
    private $Headline;
    private $AccountKey;
    private $PostKey;
    private $UserKey;

    public function __construct()
    {
        $this->Headline     = $_GET['Headline'] ?? null;
        $this->AccountKey   = implode($_SESSION['AccountKey'] ?? null);

    }


    function getPostKey()
    {
        require_once('../Backend/CCommentSection.php');
        $this->PostKey  = CCommentSection::getPostKey($this->Headline);

    }

    function getUserKey()
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select usr.UserKey from user AS usr
                                                                    INNER JOIN accountdetails AS ad ON ad.AccountKey = usr.AccountRefKey
                                                                    WHERE AccountKey = '$this->AccountKey';");
        $Sql_Statement->execute();
        $this->UserKey = $Sql_Statement->fetch(PDO::FETCH_COLUMN);

    }

    function checkIfPostIsAlreadySet()
    {
        $Sql_Statement = CServerConnection::$DB_connection->prepare(" SELECT * FROM likes WHERE PostRefKey = ? AND UserRefKey = ? ");
        $Sql_Statement->execute([$this->PostKey, $this->UserKey]);
        $result = $Sql_Statement->fetch();
        if (!$result)
        {
            $this->setNewPostLike();

        }
        else
        {
            //echo "<script> alert('Du hast diesen Post bereits geliked!')"."</script>";
            $this->updateLikes();
        }

    }

    function setNewPostLike()
    {
        $Sql_Insertion_Statement = CServerConnection::$DB_connection->prepare("INSERT INTO linkvel.likes(PostRefKey, UserRefKey) VALUES (?,?)");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection,$Sql_Insertion_Statement);
        $Sql_Insertion_Statement->execute([$this->PostKey  , $this->UserKey]);
        $this->updateLikes();
    }

    function updateLikes()
    {
        include_once '../Backend/CFeedsloading.php';
        echo CFeedsloading::getNumberOfPostLikes($this->PostKey);
    }

}




