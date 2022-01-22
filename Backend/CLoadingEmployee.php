<?php

/*
 * Created by @Duc Duong
*/


include_once '../Backend/CUserDataLoading.php';

$result = new CLoadingEmployee();
$result->printHTMLTableContactDetails();
$result->printHTMLTablePostIdHeadline();



class CLoadingEmployee
{

    private $AccountID;
    private $FirstName;
    private $MidName;
    private $LastName;
    private $BirthDate;
    private $StreetAddress;
    private $ZipCode;
    private $Country;
    private $Email;
    private $Password;
    private $Result;



    public function __construct()
    {
        // Here you get the AccountKey that the employee wants to put into the field and search for it.
        $this->AccountID = $_GET['Input'];
    }



    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



    /* Method  : getAccountId()
     * @Sql    : The database is searched for the entered AccountId = AccountKey.
     * @return : An AccountKey is returned that similarly matches with the AccoutId
     */
    public function getAccountId()
    {
        $AccountKey = $this->AccountID;

        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT AccountKey FROM accountdetails WHERE AccountKey = '$AccountKey'");

        $Sql_Statement->execute();
        return $Sql_Statement->fetch(PDO::FETCH_COLUMN);
    }



    /* Method  : getCountedPostId()
     * @Sql    : Each post is always assigned only one PostId.
     *           The method adds up all PostId in the database to a number created by the user.
     * @return : Number of PostId's created
     */

    public function getCountedPostId()
    {
        $AccountKey = $this->AccountID;

        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT COUNT(pd.PostKey) FROM post pd 
                                                                   INNER JOIN superuser AS spu on pd.SuperUserRefKey = spu. SuperUserKey
                                                                   INNER JOIN user AS ur ON spu.UserRefKey = ur.UserKey
                                                                   INNER JOIN accountdetails AS ad on ur.AccountRefKey = ad.AccountKey
                                                                   WHERE ad.AccountKey = '$AccountKey'");

        $Sql_Statement->execute();
        return ($Sql_Statement->fetch(PDO::FETCH_COLUMN));
    }



    /* Method  : printHTMLTablePostIdHeadline()
     * The AccountKey is used to look in the database which post a user has ever made.
     * When you run the spl statement in php. The output is an associative array. In the form of the number of post (getgetCountedPostId())
     * and in the respective arrays is a "PostId" and a "Headline".
     *
     * @return HTML-Table:
     *
     *   |----------------------------------------|
     *   | [PostId: ][ ... ][Überschrift: ][ ... ]|
     *   |----------------------------------------|
     *   | [PostId: ][ ... ][Überschrift: ][ ... ]|
     *   |----------------------------------------|
     *   | [PostId: ][ ... ][Überschrift: ][ ... ]|
     *   |----------------------------------------|
     *   | [PostId: ][ ... ][Überschrift: ][ ... ]|
     *   |----------------------------------------|
     *
     */

    public function printHTMLTablePostIdHeadline()
    {

        $AccountKey = $this->AccountID;

        $Sql_Statement = CServerConnection::$DB_connection->query("SELECT pd.PostKey, pd.Headline FROM post pd 
                                                                   INNER JOIN superuser AS spu on pd.SuperUserRefKey = spu. SuperUserKey
                                                                   INNER JOIN user AS ur ON spu.UserRefKey = ur.UserKey
                                                                   INNER JOIN accountdetails AS ad on ur.AccountRefKey = ad.AccountKey
                                                                   WHERE ad.AccountKey = '$AccountKey'");

        $Sql_Statement->execute();

        $resultPostIdHeadline = $Sql_Statement->fetchAll(PDO::FETCH_ASSOC);

        $numberOfPostId = $this->getCountedPostId($this->AccountID);


            echo
                "<table class='table_post' style= width: 517.312px; height: 35px; >"
                . "<tbody>";

                    for ($index = 0; $index < $numberOfPostId; $index++) {
                        echo

                            "<tr style= height: 32.5px;>"
                            . "<td style= width: 69px; height: 32.5px; >&nbsp;Post ID:</td>"
                            . "<td style= width: 58px; height: 32.5px; >&nbsp;" . ($resultPostIdHeadline[$index]['PostKey']) . "</td>"
                            . "<td style= width: 78px; height: 32.5px; >&nbsp;&Uuml;berschrift:</td>"
                            . "<td style= width: 313.312px; height: 32.5px; >&nbsp;" . ($resultPostIdHeadline[$index]['Headline']) . "</td>"
                            . "</tr>";

                    }

                    "</tbody>"
                    . "</table>";
    }



    /* Method  : printHTMLTableContactDetails()
     * A table is generated that contains all user information for the entered AccountId = AccountKey
     * is found in the database
     * @return HTML-Table:
     *
     * |-------------------------|
     * |[AccountId:     ] [ ... ]|
     * |-------------------------|
     * |[FirstName:     ] [ ... ]|
     * |-------------------------|
     * |[MidName:       ] [ ... ]|
     * |-------------------------|
     * |[Birthday:      ] [ ... ]|
     * |-------------------------|
     * |[StreetAddress: ] [ ... ]|
     * |-------------------------|
     * |[ZipCode:       ] [ ... ]|
     * |-------------------------|
     * |[Country:       ] [ ... ]|
     * |-------------------------|
     * |[Email:         ] [ ... ]|
     * |-------------------------|
     *
     */

    public function printHTMLTableContactDetails()
    {
        include_once "../Backend/CUserDataLoading.php";

        $AccountKey = $this->AccountID;

        if(empty($this->AccountID))
        {
            echo "Es wurden keine Datensätze gefunden.";
        }
        else
        {
            // Output: 2x9 table
            echo

                "<table class='table_contactdetails' style=width: 369px; height: 250px;>"
                . "<tbody>"
                . "<tr style= height: 24px;>"
                . "<td style= width: 103.5px; height: 24px ;>&nbsp;Account ID:</td>"
                . "<td style= width: 264.5px; height: 24px ;>&nbsp;" . $this->getAccountId() . "</td>"
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
                . "</tbody>"
                . "</table>";
        }
    }
}
