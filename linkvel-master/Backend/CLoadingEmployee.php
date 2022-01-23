<?php

$result = new CLoadingEmployee();
$result->printHTMLTable();

class CLoadingEmployee
{

    private $AccountID;





    function __construct()
    {
        $this->AccountID = $_GET['Input'];
    }

    function printAccountID()
    {
        echo $this->AccountID;
    }

    function printHTMLTable()
    {
        include_once '../Backend/CUserDataLoading.php';
        echo
            "<table>"
            . "<tbody>"
            . "<tr>"
            . "<td>" . CUserDataLoading::getUserName(). "</td>"
            ."<td>1&nbsp;"."</td>"
            . "</tbody>"
            . "</table>";
    }

}