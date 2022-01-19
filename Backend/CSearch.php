<!-- Created by @Antonia Geschke-->
<?php

include_once ('CServerConnection.php');
include_once ('CExceptionHandler.php');


class CSearch
{
    static private $NumberOfPost;
    //========= Searches for Hashtags =========
    public static function SearchHashtag(String $statement)
    {
        $ServerSession   = new CServerConnection("localhost","root", "");
        $pdoServer = $ServerSession::connectServer();
        $SearchResult = $pdoServer->query("SELECT PostKey FROM linkvel.post WHERE Hashtags LIKE '%{$statement}%' ");

        return $SearchResult->fetchAll(PDO::FETCH_ASSOC);
    }

    //========= Searches for Headlines =========
    public static function SearchHeadline(String $statement)
    {
        $ServerSession   = new CServerConnection("localhost","root", "");
        $pdoServer = $ServerSession::connectServer();
        $SearchResult = $pdoServer->query("SELECT PostKey FROM linkvel.post WHERE Headline LIKE '%{$statement}%' ");
        self::$NumberOfPost = $SearchResult->fetchAll(PDO::FETCH_ASSOC);
        return self::$NumberOfPost;

    }



//========= Searches for Hashtags if Search-statement contains '#'. Otherwise it will search for Headlines=========
    public static function Search(string $statement)
    {
        if(str_contains($statement, '#')){
            return self::SearchHashtag($statement);
        }
        else{
            return self::SearchHeadline($statement);
        }

    }


    public static function showPostResult()
    {
        require_once('../Backend/CFeedsloading.php');
        $NumberOfPostID = count(self::$NumberOfPost);
        /*
            PostNumber is a specific Value for the functions "generateHeadlineID(), generateLikeButtonID(), generateCommentButtonID(), generateShareButtonID()
            Those function has the task to generate different IDs from each other for the HTML Tags
         */
        $IDNumber = 1;

        for ($Index = 0; $Index < $NumberOfPostID  ; $Index++)
        {
            $PostKey            = implode(self::$NumberOfPost[$Index]);
            $HeadlineID         = CFeedsloading::generateHeadlineID($IDNumber);
            $LikeButtonID       = CFeedsloading::generateLikeButtonID($IDNumber);
            $CommentButtonID    = CFeedsloading::generateCommentButtonID($IDNumber);
            $ShareButtonID      = CFeedsloading::generateShareButtonID($IDNumber);
            $LikeLabelID        = CFeedsloading::generateLikeLabel($IDNumber);
            $CommentLabelID     = CFeedsloading::generateCommentLabel($IDNumber);
            CFeedsloading::generateHtml($PostKey, $HeadlineID, $LikeButtonID, $CommentButtonID, $ShareButtonID, $LikeLabelID, $CommentLabelID);
            $PostKey =  $PostKey + 1;
            $IDNumber = $IDNumber + 1;
        }
    }


}