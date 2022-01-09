<?php

include_once('../Backend/CServerConnection.php');
include_once('../Backend/CExceptionHandler.php');

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

echo $_POST['InputAccountID'];

class CUserDataLoading
{
    static function getUserName($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select ad.UserName from accountdetails ad where AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }


    static function getUserFirstname($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.FirstName from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserMidname($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.MidName from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserLastname($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.LastName from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserBirthDate($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.Birthday from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserTelNumber($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.PhoneNumber from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserAddress($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.StreetAddress from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }


    static function getUserZipCode($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.ZipCode from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserCountry($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.Country from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getUserEmail($AccountKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select cd.Email from contactdetails cd 
                                                                    INNER join user AS usr ON cd.ContactKey = usr.ContactRefKey
                                                                    INNER JOIN accountdetails AS ad ON usr.AccountRefKey = ad.AccountKey 
                                                                    where ad.AccountKey= '$AccountKey'");
        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    static function getAccountIDEmployeePage()
    {
        return $_POST['InputAccountID'];
    }

}
?>