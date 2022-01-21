<?php

include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------------------

$CommentSection = new CCommentSection;
$CommentSection->setPostKey();
$NumberOfComment = count($CommentSection->getAllCommentsFromPost(CCommentSection::getPostKey()));
////$NumberOfComment= 3;
$CommentSection->generateCommentSectionFrame($NumberOfComment);


class CCommentSection
{
    private static  $Headline;
    private static  $PostKey;
    private static  $NumberOfComment;
    private static  $CommentsSectionKeys;
    private static  $Session;
    private static  $CommentLabelID;




    function __construct()
    {
        self::$Headline                 = ($_GET["Headline"]        ?? null);
        self::$Session                  = ($_GET["Session"]         ?? null);
        self::$CommentLabelID           = ($_GET["CommentLabelID"] ?? null);


    }

    static function setPostKey()
    {
        $Headline = self::$Headline;

        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT p.PostKey from post AS p where p.Headline = '$Headline' ;");
        $Sql_Statement->execute();
        return self::$PostKey = $Sql_Statement->fetch(PDO::FETCH_COLUMN);

    }

    static function getPostKey()
    {
        return self::$PostKey;
    }

    static function getAllCommentsFromPost($PostKey)
    {


        $Sql_Statement = CServerConnection::$DB_connection->query("select CommentsSectionKey from linkvel.commentssection AS cs
                                                                    INNER JOIN post AS p ON p.PostKey = cs.PostRefKey
                                                                    WHERE PostKey = '$PostKey'");
        $Sql_Statement->execute();

        return self::$CommentsSectionKeys = $Sql_Statement->fetchAll(PDO::FETCH_ASSOC);


        //return $this->CommentsSectionKeys;
        //return $this->CommentsSectionKeys['CommentsSectionKey'];
    }

    static function generateCommentSectionFrame($NumberOfComment)
    {
        //$this->NumberOfComment = $NumberOfComment;
        //echo "<br>";
        //print_r( $this->CommentsSectionKeys);
        //echo "<br>";
        //echo implode($this->CommentsSectionKeys[1]);


        for ($Index = 0; $Index < $NumberOfComment ; $Index++)
        {
            $UserCommentsKey = implode(self::$CommentsSectionKeys[$Index]);

            self::generateHTMLCommentFrameBuilder(self::$PostKey, $UserCommentsKey);
        }

        self::generateHTMLCommentInput();

    }


    static function generateHTMLCommentFrameBuilder($PostKey,$UserCommentsKey)
    {


            echo
                "<div id='CommentSection' class='CommentSection'>"
                . "<p class='CommentUserName'>"
                . CCommentSection::getUserName($PostKey,$UserCommentsKey )
                . "</p>"
                . "<p  class='CommentDateTime'>"
                . CCommentSection::getCommentDateTime( $PostKey,$UserCommentsKey)
                . "</p>"
                . "<p class='CommentContent'>"
                . CCommentSection::getCommentsContents( $PostKey,$UserCommentsKey)
                . "</p>"
                . "</div>";

    }


    static function generateHTMLCommentInput()
    {
            echo
            "<div class='CommentInputArea'>"
            ."<input  id='CommentInputArea' class='input' role='textbox' type='text' placeholder='Teile deine Meinung mit der Community!'> "
            ."<button onclick='UploadComments(\"".self::$Session."\" , \"".self::$CommentLabelID."\")'> Senden </button>"
            ."</div>";
    }

    static function getUserName($PostKey, $UserCommentsKey)
    {

        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT ad.UserName from accountdetails as ad 
                                                                   INNER join user AS usr ON ad.AccountKey = usr.AccountRefKey 
                                                                   INNER JOIN commentssection as cs On cs.UserRefKey = usr.UserKey
                                                                   INNER JOIN post AS p ON cs.PostRefKey = p.PostKey  
                                                                   where cs.CommentsSectionKey = '$UserCommentsKey' AND p.PostKey = '$PostKey'; ");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        return $Results;
    }

    static function getCommentDateTime( $PostKey, $UserCommentsKey)
    {

            $Sql_Statement = CServerConnection::$DB_connection->query("SELECT c.Comment_Date_Time from commentssection AS c  INNER JOIN post AS p ON p.PostKey = c.PostRefKey
                                                                        WHERE c.CommentsSectionKey = '$UserCommentsKey' AND p.PostKey = '$PostKey' ; ");
            $Sql_Statement->execute();
            $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
            return $Results;
    }

    static function getCommentsContents($PostKey, $UserCommentsKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" SELECT c.CommentText from commentssection AS c 
                                                                    INNER JOIN post AS p ON p.PostKey = c.PostRefKey
                                                                    WHERE c.CommentsSectionKey = ' $UserCommentsKey' AND p.PostKey = '$PostKey'; ");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        return $Results;
    }


}