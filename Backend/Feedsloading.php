<?php
include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------------------

class PostData
{

    static function getSessionForCirle(): string
    {
        return implode($_SESSION['AccountKey']);

    }

    static function generateWelcomeCard()
    {
        if (isset($_SESSION['AccountKey']))
        {
            require_once('../Backend/UserDataLoading.php');
            $UserData = new CUserDataLoading();
            $FirstName = $UserData::getUserFirstname(implode($_SESSION['AccountKey']));
            $Midname = $UserData::getUserLastname(implode($_SESSION['AccountKey']));
            $LastName = $UserData::getUserLastname(implode($_SESSION['AccountKey']));
            echo "<br>";
            echo "<h1 id='WelcomeInitUser'>";
            echo "Willkommen " . $FirstName . " " . $LastName ."!". "\n";
            echo "<br>";
            echo "Wir hoffen du hast einen wunderschönen Tag!";
            echo "</h1>";
            echo "<br>";


        }
        else
        {
            echo "<br>";
            echo "<h1 id='WelcomeNotInitUser'>";
            echo "Willkommen auf Linkvel! Wir hoffen, du hast einen wunderschönen Tag! \n";
            echo "</h1>";
            echo "<br>";

        }

    }


    static function generateHtml($KeyID)
    {
        $Headline               = PostData::getPostHeadline($KeyID);
        $MediaFileDirectory     = PostData::getUserMedia($KeyID);
        echo(

            "<div class='UserPost' >"
                ."<article>"
                ."<br>"
                . "<h1 id='headline'> "
                . "<a href='#' > $Headline </a>"
                . "</h1>"
                ."<br>"
                . "<p id='UserName'> User: ".PostData::getUserName($KeyID). "</p>"
                . "<p id='UserText'>".PostData::getPostText($KeyID)."</p>"
                ."<br>"
                ."<img src='$MediaFileDirectory' alt='img' class='img'>"
                //. "<p>".PostData::GetUserMedia($KeyID)."</p>"
                ."<br>"

                ."<div class='InteractionMediaIcon'>"
                    ."<div class='IconBlock'>"
                    ."<button class='material-icons'> &#xe80b; </button>"
                    ."<label > Likes </label>"
                    ."</div>"

                    ."<div class='IconBlock'>"
                        ."<button class='material-icons'> &#xe0b9; </button>"
                        ."<label> Comment </label>"
                    ."</div>"

                    ."<div class='IconBlock'>"
                        ."<button class='material-icons'> &#xe80d; </button>"
                        ."<label> shares </label>"
                    ."</div>"
                ."</div>"
                ."<br>"
                ."</article>"
            ."</div>"

        );
    }

    static function getAllPostId(): array
    {

        $Sql_Statement = CServerConnection::$DB_connection->query("select PostKey from linkvel.post");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetchAll(PDO::FETCH_COLUMN);
        $ids =[];
        foreach ($Results as $Result)
        {
            $ids[] = $Result;

        }

        return $ids;
    }

    static function getPostHeadline($KeyID)
    {

        $Sql_Statement = CServerConnection::$DB_connection->query("select Headline from linkvel.post where PostKey = '$KeyID'  ");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        return $Results;
    }
    static function GetUserName($KeyID)
    {

        $Sql_Statement = CServerConnection::$DB_connection->query("select ad.UserName from accountdetails ad
                                                                    INNER join user AS usr ON ad.AccountKey = usr.AccountRefKey 
                                                                    INNER Join superuser AS susr ON usr.UserKey = susr.UserRefKey
                                                                    INNER JOIN post AS p ON p.SuperUserRefKey=susr.SuperUserKey where p.PostKey = '$KeyID' ");
        $Sql_Statement->execute();
        $Results = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
        return $Results;
    }

    static function getPostText($KeyID)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("select PostTextFile from linkvel.post where PostKey = '$KeyID'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserMedia($KeyID)
    {
        //$Sql_Statement = CServerConnection::$DB_connection->query("select PictureFile from linkvel.post p join linkvel.superuser su join linkvel.accountdetails ad where ad.UserName ='PHeer'   ");
        $Sql_Statement = CServerConnection::$DB_connection->query("select PictureFile from linkvel.post where PostKey = '$KeyID'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetchColumn();
    }
}

?>

