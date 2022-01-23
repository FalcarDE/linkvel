<?php
include_once('CServerConnection.php');
include_once('CExceptionHandler.php');

//--------------------------------------------------------------------------------------------------------------------------------------

//========= Server Connection =========
$ServerSession = new CServerConnection("localhost","root", "");
$ServerSession::connectServer();
//========= Server Connection =========

//--------------------------------------------------------------------------------------------------------------------------------------
$EmpolyeeDataResult = new CEmployeeData();
$EmpolyeeDataResult->getAccountIDByName();
$EmpolyeeDataResult->getEmployeeRole();
$EmpolyeeDataResult->getEmployeeDeparment();
$EmpolyeeDataResult->printHTMLTableEmployeeData();



class CEmployeeData
{
    private $EmployeeKey;
    private $AccountID;
    private $EmployeeRole;
    private $EmployeeDeparment;
    public function __construct()
    {
        $this->EmployeeKey = $_POST['EmployeeKey'];
    }

    function getAccountIDByName()
    {
        $Sql_Statement = CServerConnection::$DB_connection->query(" select ad.AccountKey from accountdetails AS ad 
                                                                    INNER JOIN employee AS e ON ad.AccountKey = e.AccountRefKey
                                                                    WHERE e.EmployeeKey = '$this->EmployeeKey';  ");
        $Sql_Statement->execute();
        return $this->AccountID = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    function getEmployeeRole()
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT e.Role FROM employee AS e WHERE e.EmployeeKey = '$this->EmployeeKey'  ");
        $Sql_Statement->execute();
        return $this->EmployeeRole = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    function getEmployeeDeparment()
    {
        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT e.Deparments FROM employee AS e WHERE e.EmployeeKey = '$this->EmployeeKey'  ");
        $Sql_Statement->execute();
        return $this->EmployeeDeparment = $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }

    function printHTMLTableEmployeeData()
    {
        include_once "../Backend/CUserDataLoading.php";

        if (empty($this->AccountID)) {
            echo "Es wurden keine Datensätze gefunden.";
        } else {
            // Output: 2x9 table
            echo

                "<table class='table_contactdetails' style=width: 369px; height: 250px;>"
                . "<tbody>"
                . "<tr style= height: 24px;>"
                . "<td style= width: 103.5px; height: 24px ;>&nbsp;Account ID:</td>"
                . "<td style= width: 264.5px; height: 24px ;>&nbsp;" . $this->AccountID . "</td>"
                . "</tr>"
                . "<tr style= height: 24px;>"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;Firstname:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" . CUserDataLoading::getUserFirstname($this->AccountID) . "</td>"
                . "</tr>"
                . "<tr style= height: 24px; >"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;MidName:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" . CUserDataLoading::getUserMidname($this->AccountID) . "</td>"
                . "</tr>"
                . "<tr style= height: 24px; >"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;LastName:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" . CUserDataLoading::getUserLastname($this->AccountID) . "</td>"
                . "</tr>"
                . "<tr style= height: 24px; >"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;Birthday:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" . CUserDataLoading::getUserBirthDate($this->AccountID) . "</td>"
                . "</tr>"
                . "<tr style=  height: 24px;>"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;StreetAddress:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" . CUserDataLoading::getUserAddress($this->AccountID) . "</td>"
                . "</tr>"
                . "<tr style=  height: 24px; >"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;ZipCode:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" . CUserDataLoading::getUserZipCode($this->AccountID) . "</td>"
                . "</tr>"
                . "<tr style=  height: 24px; >"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;Country:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" . CUserDataLoading::getUserCountry($this->AccountID) . "</td>"
                . "</tr>"
                . "<tr style=  height: 24px; >"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;Email:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" . CUserDataLoading::getUserEmail($this->AccountID) . "</td>"
                . "</tr>"
                . "<tr style=  height: 24px; >"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;Mitarbeiterrolle:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" .$this->getEmployeeRole($this->AccountID). "</td>"
                . "</tr>"
                . "<tr style=  height: 24px; >"
                . "<td style= width: 103.5px; height: 24px; >&nbsp;Abteilung:</td>"
                . "<td style= width: 264.5px; height: 24px; >&nbsp;" .  $this->getEmployeeDeparment($this->AccountID). "</td>"
                . "</tr>"

                . "</tbody>"
                . "</table>";
        }
    }
}