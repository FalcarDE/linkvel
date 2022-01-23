<?php
session_start();
include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========


$UserComment = new CUploadComment();
$UserComment->getPostKey();
$UserComment->getUserKey();
$UserComment->setUserCommentSection();
//$UserComment->displayUpdatedCommentSection();



class CUploadComment
{
    static private $comment;
    static private $AccountKey;
    static private $Headline;
    static private $PostKey;
    static private $UserKey;
    static private $NumberOfComment;
    static private $CommentsSectionKeys;



    function __construct()
    {
        self::$comment          = $_GET['comment'];
        self::$Headline         = $_GET['headline'];
        self::$AccountKey       = implode($_SESSION['AccountKey']);
    }


    function checkUser()
    {
        if (empty($_SESSION['AccountKey']))
        {
            exit();
        }
    }


    function getPostKey()
    {
        $Headline = self::$Headline;
        $Sql_Statement = CServerConnection::$DB_connection->prepare("SELECT p.PostKey from post AS p where p.Headline = '$Headline'");
        $Sql_Statement->execute();
        return self::$PostKey = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    function getUserKey()
    {

        $AccountKey = self::$AccountKey;
        $SqlKeyData = CServerConnection::$DB_connection->prepare("Select usr.UserKey from user AS usr 
                                                                  INNER JOIN accountdetails ad ON ad.AccountKey = usr.AccountRefKey
                                                                  where ad.AccountKey = '$AccountKey'; ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $SqlKeyData);
        $SqlKeyData->execute();
        self::$UserKey = $SqlKeyData->fetchColumn();
    }

    function setUserCommentSection()
    {
        date_default_timezone_set("MET");
        $DateTime = date("Y-m-d H:i:s", time());
        $Sql_Insertion_Statement = CServerConnection::$DB_connection->prepare(" INSERT INTO commentssection(UserRefKey , PostRefKey , Comment_Date_Time, CommentText) VALUES (?,?, ?, ?); ");
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection,$Sql_Insertion_Statement);
        $Sql_Insertion_Statement->execute([self::$UserKey, self::$PostKey, $DateTime, self::$comment]);
    }

    function displayUpdatedCommentSection()
    {
        require_once '../Backend/CCommentSection.php';
        self::$CommentsSectionKeys = CCommentSection::getAllCommentsFromPost(self::$PostKey);
        self::$NumberOfComment = count(self::$CommentsSectionKeys);

        for ($Index = 0; $Index < self::$NumberOfComment ; $Index++)
        {
            $UserCommentsKey = implode(self::$CommentsSectionKeys[$Index]);
            echo CCommentSection::generateHTMLCommentFrameBuilder(self::$PostKey,$UserCommentsKey );
        }

    }

}