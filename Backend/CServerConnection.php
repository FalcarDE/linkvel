<?php
/*
 * Created by @Hoang
*/
class CServerConnection
{
    private static  $Servername         = null;
    private static  $ServerUser         = null;
    private static  $ServerUserPwd      = null;
    public  static  $DB_connection      = null;


    function __construct(string $Servername, String $ServerUser, String $ServerUserPwd)
    {
        self::$Servername       = $Servername;
        self::$ServerUser       = $ServerUser;
        self::$ServerUserPwd    = $ServerUserPwd;
    }


    public function getServerData()
    {
        $mServername    = self::$Servername;
        $mServerUser    = self::$ServerUser;
        $mServerUserPwd = self::$ServerUserPwd;
    }

    public static function connectServer()
    {
        try {
            $localServername = self::$Servername;
            self::$DB_connection = new PDO("mysql:host=$localServername;dbname=linkvel", self::$ServerUser, self::$ServerUserPwd);
            self::$DB_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Database Connection was succesful.";
            //echo "<br>";
            return self::$DB_connection;
            echo "<br>";
        } catch (PDOException $Error) {
            echo "Database Connection was not succesful! " . $Error->getMessage();
            exit();
        }
    }

}