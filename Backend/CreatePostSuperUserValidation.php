<!-- Created by @AntoniaGeschke -->
<?php
session_start();

include_once('../Backend/CServerConnection.php');
include_once('../Backend/CExceptionHandler.php');



//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();

// ====== gets current AccountKey if there is a session ========



if(isset($_SESSION['AccountKey'])) {

    $AccountKey =implode($_SESSION['AccountKey']);

    $Sql_Statement = CServerConnection::$DB_connection->query(" SELECT supu.SuperUserToken FROM superuser AS supu
                                                                    INNER JOIN user AS usr ON usr.UserKey = supu.UserRefKey
                                                                    INNER JOIN accountdetails AS ad ON ad.AccountKey = usr.AccountRefKey
                                                                    WHERE ad.AccountKey= '$AccountKey'");
    $Sql_Statement->execute();
    $SuperUserKey = $Sql_Statement->fetch(PDO::FETCH_COLUMN);


    $Sql_Statement = CServerConnection::$DB_connection->query(" SELECT standu.StandardUserKey FROM standarduser AS standu 
                                                                    INNER JOIN user AS usr ON usr.UserKey = standu.UserRefKey
                                                                    INNER JOIN accountdetails AS ad ON ad.AccountKey = usr.AccountRefKey
                                                                    WHERE ad.AccountKey = '$AccountKey'");
    $Sql_Statement->execute();
    $StandardUserKey = $Sql_Statement->fetch(PDO::FETCH_COLUMN);


    if (!empty($SuperUserKey)) {
        header('Location: ../Frontend/creat_post.php');
    } elseif (!empty($StandardUserKey)) {
        header('Location: ../Frontend/NoSuperUser.php');
    }
}
else
{
    header('Location: ../Frontend/FailedLogIn.php');
}


