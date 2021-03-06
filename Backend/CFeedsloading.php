<?php
include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//--------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------

class CFeedsloading
{


    //------------------------------------ HMTL ID - Builder ---------------------------------------------------------------------------
    static function generateHeadlineID($IDNumber): string
    {

        return "headline_".$IDNumber;
    }

    static function generateLikeButtonID($IDNumber): string
    {

        return "like_".$IDNumber;
    }

    static function generateCommentButtonID($IDNumber): string
    {

        return "comment_".$IDNumber;
    }

    static function generateLocationButtonID($IDNumber): string
    {

        return "button_".$IDNumber;
    }

    static function generateLikeLabel($IDNumber): string
    {
        return "NumberOfLikes".$IDNumber;
    }

    static function generateCommentLabel($IDNumber): string
    {
        return "NumberOfComment".$IDNumber;
    }




    //------------------------------------ Welcome Card Builder ---------------------------------------------------------------------------
    static function generateWelcomeCard()
    {
        //------------------------------------ Check if your in loginIn. So they can have a personal welcome greet ---------------------------------------------------------------------------

        if (isset($_SESSION['AccountKey']))
        {
            require_once('../Backend/CUserDataLoading.php');

            $FirstName  = CUserDataLoading::getUserFirstname(implode($_SESSION['AccountKey']));
            $Midname    = CUserDataLoading::getUserMidname(implode($_SESSION['AccountKey']));
            $LastName   = CUserDataLoading::getUserLastname(implode($_SESSION['AccountKey']));
            echo "<br>";
            echo "<h1 id='WelcomeInitUser'>";
            echo "Willkommen " . $FirstName . " ". $Midname." ".$LastName ."!". "\n";
            echo "<br>";
            echo "Wir hoffen du hast einen wundersch??nen Tag!";
            echo "</h1>";
            echo "<br>";


        }
        else
        {
            echo "<br>";
            echo "<h1 id='WelcomeNotInitUser'>";
            echo "Willkommen auf Linkvel! Wir hoffen, du hast einen wundersch??nen Tag! \n";
            echo "</h1>";
            echo "<br>";

        }

    }

    //------------------------------------ UserPost - Builder ---------------------------------------------------------------------------
    static function generateHtml($PostKey, $HeadlineID, $LikeButtonID, $CommentButtonID, $LocationButtonID ,$LikeLabelID, $CommentLabelID)
    {
        $Headline               = CFeedsloading::getPostHeadline($PostKey);
        $MediaFileDirectory     = CFeedsloading::getUserMedia($PostKey);

        if(!empty($_SESSION['AccountKey']))
        {
            $Session            = implode($_SESSION['AccountKey']);
        }
        else
        {
            $Session            = "";
        }


        echo(

            "<div class='UserPost' >"
                ."<article>"
                ."<br>"
                . "<h1 class='headline' id='$HeadlineID' onclick='generateCommentSection(this.id)'>$Headline</h1>"
                ."<br>"
                . "<p id='UserName'> User: ".CFeedsloading::getUserName($PostKey). "</p>"
                . "<p id='UserText'>".CFeedsloading::getPostText( $PostKey)."</p>"
                ."<br>"
                ."<img src='$MediaFileDirectory' alt='img' class='img'>"
                //. "<p>".PostData::GetUserMedia($KeyID)."</p>"
                ."<br>"



            // Every specific field has their own unique identifier, which are generate for each post
            // all of the javascript function and PHP parameter are needed for Ajax
            ."<div class='InteractionMediaIcon'>"
                    ."<div class='IconBlock'>"
                    ."<button class='material-icons' id='$LikeButtonID' onclick='UpdateLikes(\"".$LikeButtonID."\", \"".$LikeLabelID."\", \"".$HeadlineID."\", \"".$Session."\" );' > &#xe80b; </button>"
                    ."<label id='$LikeLabelID' > ". CFeedsloading::getNumberOfPostLikes($PostKey) . "</label>"
                    ."</div>"

                    ."<div class='IconBlock'>"
                        ."<button class='material-icons' id='$CommentButtonID' onclick='generateCommentSection(\"".$HeadlineID."\", \"".$Session."\" , \"".$CommentLabelID."\" );' > &#xe0b9; </button>"
                        ."<label id='$CommentLabelID' >". CFeedsloading::getNumberOfComments($PostKey) ."</label>"
                    ."</div>"

                    ."<div class='IconBlock'>"
                        ."<button class='material-icons' id='$LocationButtonID' onclick='showLocation(\"".$HeadlineID."\")'> location_on </button>"
                    ."</div>"
                ."</div>"
                ."<br>"
                ."</article>"
            ."</div>"

        );
    }


    //------------------------------------ GET - Section from the Database ---------------------------------------------------------------------------

    static function getAllPostId(): array
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("select PostKey from linkvel.post");
        $Sql_Statement->execute();
        return $Sql_Statement->fetchAll(PDO::FETCH_ASSOC);

    }

    static function getPostHeadline($PostKey)
    {

        $Sql_Statement = CServerConnection::$DB_connection->query("select Headline from linkvel.post where PostKey = '$PostKey'  ");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        return $Results;
    }

    static function getUserName($PostKey)
    {

        $Sql_Statement = CServerConnection::$DB_connection->query("select ad.UserName from accountdetails ad
                                                                    INNER join user AS usr ON ad.AccountKey = usr.AccountRefKey 
                                                                    INNER Join superuser AS susr ON usr.UserKey = susr.UserRefKey
                                                                    INNER JOIN post AS p ON p.SuperUserRefKey=susr.SuperUserKey where p.PostKey = '$PostKey' ");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        return $Results;
    }

    static function getPostText($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("select PostTextFile from linkvel.post where PostKey = '$PostKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserMedia($PostKey)
    {
        //$Sql_Statement = CServerConnection::$DB_connection->query("select PictureFile from linkvel.post p join linkvel.superuser su join linkvel.accountdetails ad where ad.UserName ='PHeer'   ");
        $Sql_Statement = CServerConnection::$DB_connection->query("select PictureFile from linkvel.post where PostKey = '$PostKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetchColumn();
    }
    
    static function getNumberOfPostLikes($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" SELECT l.LikesKey from likes AS l
                                                                    INNER JOIN post AS P ON p.PostKey = l.PostRefKey
                                                                    where p.PostKey = '$PostKey'");
        $Sql_Statement->execute();
        return count($Sql_Statement->fetchAll(PDO::FETCH_ASSOC));
    }
    
    static function getNumberOfComments($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" SELECT cs.CommentsSectionKey from commentssection as cs
                                                                    INNER JOIN post AS p ON p.PostKey = cs.PostRefKey
                                                                    WHERE p.PostKey = '$PostKey';");
        $Sql_Statement->execute();
        return count($Sql_Statement->fetchAll(PDO::FETCH_ASSOC));
    }

}

?>

