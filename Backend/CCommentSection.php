<?php

include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------------------

//$CommentSection = new CCommentSection;
//$CommentSection->getPostKey($this->Headline);
//$NumberOfComment = count($CommentSection->getAllCommentsFromPost());
//$NumberOfComment= 3;
//$CommentSection->generateCommentSectionFrame($NumberOfComment);
class CCommentSection
{
    private $Headline;
    static private $PostKey;
    static private $CommentsSectionIndex;
    static private $CommentsSectionKeys = array();




    function __construct()
    {
        $this->Headline    = ($_GET['Headline']   ?? null);

    }

    static function getPostKey($Headline)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("  SELECT p.PostKey from post AS p where p.Headline = '$Headline' ");
        $Sql_Statement->execute();
        self::$PostKey = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        return self::$PostKey;
    }


    static function getAllCommentsFromPost()
    {
        $PostKey = self::$PostKey;

        $Sql_Statement = CServerConnection::$DB_connection->query("select CommentsSectionKey from linkvel.commentssection AS cs
                                                                    INNER JOIN post AS p ON p.PostKey = cs.PostRefKey
                                                                    WHERE PostKey = '$PostKey'");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($Results as $Result)
        {
            self::$CommentsSectionKeys = $Result;
            print_r(self::$CommentsSectionKeys);

        }
        self::$CommentsSectionIndex = implode(self::$CommentsSectionKeys);
        return self::$CommentsSectionKeys;
    }

    function generateCommentSectionFrame($NumberOfComment)
    {


        for ($Index = 0; $Index < $NumberOfComment ; $Index++)
        {
            CCommentSection::generateHTMLCommentFrameBuilder();
        }

        CCommentSection::generateHTMLCommentInput();


    }

    static function generateHTMLCommentFrameBuilder()
    {
        for($Index = 0; $Index < self::$CommentsSectionIndex; $Index++)
        {
            echo
                "<div class='CommentSection'>"
                . "<p>"
                . CCommentSection::getUserName(self::$PostKey, )
                . "</p>"
                . "<p>"
                . CCommentSection::getCommentDateTime(self::$PostKey)
                . "</p>"
                . "<br>"
                . "<p>"
                . CCommentSection::getCommentsContents(self::$PostKey)
                . "</p>"
                . "</div>"
                . "<br>";
        }
    }

    static function generateHTMLCommentInput()
    {
            echo
            "<div class='CommentInputArea'>"
            ."<span  class='textarea' role='textbox' contenteditable >" ."</span>"
            ."<button onclick='UploadComments'> Senden </button>"."</div>";
    }


    static function getUserName($PostKey )
    {

        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT ad.UserName from accountdetails as ad 
                                                                   INNER join user AS usr ON ad.AccountKey = usr.AccountRefKey 
                                                                   INNER JOIN commentssection as cs On cs.UserRefKey = usr.UserKey
                                                                   where cs.CommentsSectionKey = '$PostKey' ");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        print_r(self::$CommentsSectionKeys);
        return $Results;
    }

    static function getCommentDateTime( $PostKey)
    {

            $Sql_Statement = CServerConnection::$DB_connection->query("SELECT c.Comment_Date_Time from commentssection AS c  INNER JOIN post AS p ON p.PostKey = c.PostRefKey
                                                                        WHERE c.CommentsSectionKey = '$CommentsSectionKey' AND p.PostKey = '$PostKey' ; ");
            $Sql_Statement->execute();
            $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
            return $Results;


    }

    static function getCommentsContents($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" SELECT c.CommentText from commentssection AS c 
                                                                    INNER JOIN post AS p ON p.PostKey = c.PostRefKey
                                                                    WHERE c.CommentsSectionKey = ' $CommentsSectionKey    ' AND p.PostKey = '$PostKey' ; ");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        return $Results;
    }


}