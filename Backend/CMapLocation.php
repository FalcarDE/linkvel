<?php
include_once('CServerConnection.php');
include_once('CExceptionHandler.php');


//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------------------

$Location = new CMapLocation();
$Location->setPostKey(CMapLocation::getHeadline());
$Location->getMapLongitude(CMapLocation::getPostKey());
$Location->getMapLadiutes(CMapLocation::getPostKey());
$Location->showLocation();

class CMapLocation
{

    static private $Headline;
    static private $PostKey;
    private $Longituide;
    private $Ladiute;


    public function __construct()
    {
        self::$Headline = trim($_GET['Headline']);
    }

    static function getHeadline()
    {
        return self::$Headline;
    }

    static function getPostKey()
    {
        return self::$PostKey;
    }

    function setPostKey($Headline)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT p.PostKey from post AS p where p.Headline = '$Headline' ;");
        $Sql_Statement->execute();
        return self::$PostKey = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    function getMapLongitude($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT p.MapLongitude from post AS p where p.PostKey = '$PostKey' ;");
        $Sql_Statement->execute();
        $this->Longituide = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }


    function getMapLadiutes($PostKey)
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT p.MapLadiutes from post AS p where p.PostKey = '$PostKey' ;");
        $Sql_Statement->execute();
        $this->Ladiute = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }


    function showLocation()
    {

        /* OpenMap
         * header('Location: https://www.openstreetmap.org/#map=16/41.3825/2.1769');
         * https://www.openstreetmap.org/#map=16/'.$this->Longituide.'/'.$this->Ladiute);
         * echo "https://www.openstreetmap.org/#map=16/".$this->Ladiute.'/'.$this->Longituide;
        */

        echo "https://www.google.com/maps/search/?api=1&query=".$this->Ladiute."%2C".$this->Longituide;
    }


}