<?php

include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//--------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost", "root", "");
$ServerSession::connectServer();

//========= Server Connection =========

$DeleteProcess = new CEmployeeDeletePost();
$DeleteProcess->deleteLikes(CEmployeeDeletePost::getPostKey());
$DeleteProcess->deleteComments(CEmployeeDeletePost::getPostKey());
$DeleteProcess->deletePost(CEmployeeDeletePost::getPostKey());


class CEmployeeDeletePost
{
    private static $PostKey;

    function __construct()
    {
        self::$PostKey = $_POST['PostKey'];
    }

    static function getPostKey()
    {
        return self::$PostKey;
    }

    function deleteLikes($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("DELETE FROM likes WHERE PostrefKey = '$PostKey' ");
        $Sql_Statement->execute();
    }

    function deleteComments($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("DELETE FROM commentssection WHERE PostrefKey = '$PostKey' ");
        $Sql_Statement->execute();
    }


    function deletePost($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("DELETE FROM post WHERE PostKey = '$PostKey' ");
        $Sql_Statement->execute();
    }
}