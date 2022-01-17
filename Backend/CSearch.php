<!-- Created by @Antonia Geschke-->
<?php

include_once ('CServerConnection.php');
include_once ('CExceptionHandler.php');


$Result = new CSearch();
$Result::Search();

class CSearch
{
    private static $statement;
    private static $KeyIndex;

    public function __construct()
    {
        self::$statement = $_GET['Search'];
    }


    //========= Searches for Hashtags =========
    public static function SearchHashtag()
    {
        include_once('../Backend/CFeedsloading.php');

        $statement = self::$statement;
        $ServerSession   = new CServerConnection("localhost","root", "");
        $pdoServer = $ServerSession::connectServer();
        $SearchResult = $pdoServer->query("SELECT PostKey FROM linkvel.post WHERE Hashtags LIKE '%{$statement}%' ");

        self::$KeyIndex = count($SearchResult->fetchAll(PDO::FETCH_ASSOC));
        $Result = $SearchResult[0];

        self::showPostResult($Result);

    }

    //========= Searches for Headlines =========
    public static function SearchHeadline()
    {
        include_once('../Backend/CFeedsloading.php');

        $statement = self::$statement;
        $ServerSession   = new CServerConnection("localhost","root", "");
        $pdoServer = $ServerSession::connectServer();
        $SearchResult = $pdoServer->query("SELECT PostKey FROM linkvel.post WHERE Headline LIKE '%{$statement}%' ");
        self::$KeyIndex = count($SearchResult->fetchAll(PDO::FETCH_ASSOC));

        self::showPostResult(implode($SearchResult->fetchAll(PDO::FETCH_ASSOC)));
    }



//========= Searches for Hashtags if Search-statement contains '#'. Otherwise it will search for Headlines=========
    public static function Search()
    {
        $statement = self::$statement;

        if(str_contains($statement, '#')){
           return self::SearchHashtag($statement);
        }
        else{
            return self::SearchHeadline($statement);
        }

    }


    public static function showPostResult($Result)
    {


        $PostKey   = intval($Result);

        /*
            PostNumber is a specific Value for the functions "generateHeadlineID(), generateLikeButtonID(), generateCommentButtonID(), generateShareButtonID()
            Those function has the task to generate different IDs from each other for the HTML Tags
         */
        $IDNumber = 1;

        for ($Index = 0; $Index < self::$KeyIndex ; $Index++)
        {
            $HeadlineID = CFeedsloading::generateHeadlineID($IDNumber);
            $LikeButtonID = CFeedsloading::generateLikeButtonID($IDNumber);
            $CommentButtonID = CFeedsloading::generateCommentButtonID($IDNumber);
            $ShareButtonID = CFeedsloading::generateShareButtonID($IDNumber);
            CFeedsloading::generateHtml($PostKey, $HeadlineID, $LikeButtonID, $CommentButtonID, $ShareButtonID);
            $PostKey =  $PostKey + 1;
            $IDNumber = $IDNumber + 1;
        }
    }
}