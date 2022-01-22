<?php
session_start();

ini_set('memory_limit', '1 GB');

include_once('../Backend/CServerConnection.php');
include_once('../Backend/CExceptionHandler.php');

//============= Server Connection =============
$ServerSession = new CServerConnection("localhost","root", "");
$pdoServer = $ServerSession::connectServer();
//============= Server Connection =============


//----------------------------------------------------------------------------------------------------------------------
class CEditDataOfUser
{

    /* ============================================================================================= */
    
    /* Method: updateContactdetailsOnFirstName()
     * If a new FirstName was entered, then the old FirstName is "updated" with the new ones in the database.
     *
     * @return: The new FirstName
     */

    public static function updateContactdetailsOnFirstName($NewFirstName, $AccountKey)
    {
        // prepare(): prepares an instruction(patter) for execution



        $Sql_Update_Statement = CServerConnection::$DB_connection->query("UPDATE contactdetails AS cd 
                                                                          INNER JOIN user AS ur on cd.ContactKey = ur.ContactRefKey
                                                                          INNER JOIN accountdetails AS ad ON ur.AccountRefKey = ad.AccountKey    
                                                                          SET FirstName = '$NewFirstName'
                                                                          WHERE ad.AccountKey = '$AccountKey'");

        // In case of an invalid statement an "errorInfo()" is issued
        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Update_Statement);

        // execute(): Executes the prepare() statement/patter/statement
        $Sql_Update_Statement->execute();
    }



    /* Method: updateContactdetailsOnMidName()
     * If a new MidName is entered, then the old MidName is "updated" with the new ones in the database.
     *
     * @return: The new MidName
     */

    public static function updateContactdetailsOnMidName($NewMidName, $AccountKey)
    {



        $Sql_Update_Statement = CServerConnection::$DB_connection->query("UPDATE contactdetails AS cd 
                                                                          INNER JOIN user AS ur on cd.ContactKey = ur.ContactRefKey
                                                                          INNER JOIN accountdetails AS ad ON ur.AccountRefKey = ad.AccountKey    
                                                                          SET MidName= '$NewMidName'
                                                                          WHERE ad.AccountKey = '$AccountKey'");

        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Update_Statement);

        $Sql_Update_Statement->execute();
    }



    /* Method: updateContactdetailsOnLastName()
     * If a new LastName is entered, then the old LastName is "updated" with the new ones in the database.
     *
     * @return: The new LastName
     */

    public static function updateContactdetailsOnLastName($NewLastName, $AccountKey)
    {
        $Sql_Update_Statement = CServerConnection::$DB_connection->query("UPDATE contactdetails AS cd 
                                                                          INNER JOIN user AS ur on cd.ContactKey = ur.ContactRefKey
                                                                          INNER JOIN accountdetails AS ad ON ur.AccountRefKey = ad.AccountKey    
                                                                          SET LastName= '$NewLastName'
                                                                          WHERE ad.AccountKey = '$AccountKey'");

        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Update_Statement);

        $Sql_Update_Statement->execute();
    }



    /* Method: updateContactdetailsOnStreetAddress()
     * If a new StreetAddress is entered, then the old StreetAddress is "updated" with the new ones in the database.
     *
     * @return: The new StreetAddress
     */

    public static function updateContactdetailsOnStreetAddress($NewStreetAddress, $AccountKey)
    {
        $Sql_Update_Statement = CServerConnection::$DB_connection->query("UPDATE contactdetails AS cd 
                                                                          INNER JOIN user AS ur on cd.ContactKey = ur.ContactRefKey
                                                                          INNER JOIN accountdetails AS ad ON ur.AccountRefKey = ad.AccountKey    
                                                                          SET StreetAddress= '$NewStreetAddress'
                                                                          WHERE ad.AccountKey = '$AccountKey'");

        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Update_Statement);

        $Sql_Update_Statement->execute();
    }



    /* Method: updateContactdetailsOnZipCode()
    * If a new ZipCode has been entered, then the old ZipCode is "updated" with the new ones in the database.
    *
    * @return: The new ZipCode
    */

    public static function updateContactdetailsOnZipCode($NewZipCode, $AccountKey)
    {
        $Sql_Update_Statement = CServerConnection::$DB_connection->query("UPDATE contactdetails AS cd 
                                                                          INNER JOIN user AS ur on cd.ContactKey = ur.ContactRefKey
                                                                          INNER JOIN accountdetails AS ad ON ur.AccountRefKey = ad.AccountKey    
                                                                          SET ZipCode= '$NewZipCode'
                                                                          WHERE ad.AccountKey = '$AccountKey'");

        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Update_Statement);

        $Sql_Update_Statement->execute();
    }



    /* Method: updateContactdetailsOnCountry()
     * If a new Country is entered, then the old Country is "updated" with the new ones in the database.
     *
     * @return: The new Country
     */

    public static function updateContactdetailsOnCountry($NewCountry, $AccountKey)
    {
        $Sql_Update_Statement = CServerConnection::$DB_connection->query("UPDATE contactdetails AS cd 
                                                                          INNER JOIN user AS ur on cd.ContactKey = ur.ContactRefKey
                                                                          INNER JOIN accountdetails AS ad ON ur.AccountRefKey = ad.AccountKey    
                                                                          SET Country= '$NewCountry'
                                                                          WHERE ad.AccountKey = '$AccountKey'");

        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Update_Statement);

        $Sql_Update_Statement->execute();
    }



    /* Method: updateContactdetailsOnEmail()
     * If a new Email is entered, then the old Email is "updated" with the new ones in the database.
     *
     * @return: The new  Email
     */

    public static function updateContactdetailsOnEmail($NewEmail, $AccountKey)
    {
        $Sql_Update_Statement = CServerConnection::$DB_connection->query("UPDATE contactdetails AS cd 
                                                                          INNER JOIN user AS ur on cd.ContactKey = ur.ContactRefKey
                                                                          INNER JOIN accountdetails AS ad ON ur.AccountRefKey = ad.AccountKey    
                                                                          SET Email= '$NewEmail'
                                                                          WHERE ad.AccountKey = '$AccountKey'");

        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Update_Statement);

        $Sql_Update_Statement->execute();
    }



    /* Method: updateContactdetailsOnPassword()
     * If a new Password is entered, the old Password is "updated" with the new one in the database.
     *
     * @return: The new Password
     */

    public static function updateContactdetailsOnPassword($NewPassword, $AccountKey)
    {

        //lokale Variable

        $Sql_Update_Statement = CServerConnection::$DB_connection->query("UPDATE contactdetails AS cd 
                                                                          INNER JOIN user AS ur on cd.ContactKey = ur.ContactRefKey
                                                                          INNER JOIN accountdetails AS ad ON ur.AccountRefKey = ad.AccountKey    
                                                                          SET Password= '$NewPassword'
                                                                          WHERE ad.AccountKey = '$AccountKey'");

        CExceptionHandler::DisplayPDOHandler(CServerConnection::$DB_connection, $Sql_Update_Statement);

        $Sql_Update_Statement->execute();
    }




    /* ========== Update Data (DB) ==========
     *
     * method checks whether the parameter passed is empty,
     * @return true, if the user has not entered a tag => record will not be changed
     * @return false, if the user has entered something => record of the entry is changed
     *
     * =============================================================================================
     */

    public static function checkIsEmpty($checkValue)
    {
        return empty($checkValue);
    }


    public static function updateFirstName($editFirstName,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editFirstName) === true)
        {
            return 0;
        }
        else
        {
            return CEditDataOfUser::updateContactdetailsOnFirstName($editFirstName,$AccountKey);
        }
    }

    public static function updateMidName($editMidName,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editMidName) === true)
        {
            return 0;
        }
        else
        {
            return CEditDataOfUser::updateContactdetailsOnMidName($editMidName,$AccountKey);
        }
    }

    public function updateLastName($editLastName,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editLastName) === true)
        {
            return 0;
        }
        else
        {
            return CEditDataOfUser::updateContactdetailsOnLastName($editLastName,$AccountKey);
        }
    }

    public function updateStreetAddress($editStreetAddress,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editStreetAddress) === true)
        {
            return 0;
        }
        else
        {
            return CEditDataOfUser::updateContactdetailsOnStreetAddress($editStreetAddress,$AccountKey);
        }
    }

    public function updateZipCode($editZipCode,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editZipCode) === true)
        {
            return 0;
        }
        else
        {
            return CEditDataOfUser::updateContactdetailsOnZipCode($editZipCode,$AccountKey);
        }
    }

    public function updateCountry($editCountry,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editCountry) === true)
        {
            return 0;
        }
        else
        {
            return CEditDataOfUser::updateContactdetailsOnCountry($editCountry,$AccountKey);
        }
    }

    public function updateEmail($editEmail,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editEmail) === true)
        {
            return 0;
        }
        else
        {
            return CEditDataOfUser::updateContactdetailsOnEmail($editEmail,$AccountKey);
        }
    }

    public function updatePassword($editPassword,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editPassword) === false)
        {
            return CEditDataOfUser::updateContactdetailsOnPassword($editPassword,$AccountKey);
        }
    }





    /* -------------------------------- */




    public function updateTel($editTelNumber,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editTelNumber) === false)
        {
            return CEditDataOfUser::updateContactdetailsOnPassword($editTelNumber,$AccountKey);
        }
    }




    public function updateStandardUser ($editStandardUser, $AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editStandardUser) === false)
        {
            return CEditDataOfUser::updateContactdetailsOnPassword($editStandardUser ,$AccountKey);
        }
    }

    public function updateSuperUser ($editSuperUser,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editSuperUser) === false)
        {
            return CEditDataOfUser::updateContactdetailsOnPassword($editSuperUser,$AccountKey);
        }
    }


    public function updateGender ($editGender ,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editGender) === false)
        {
            return CEditDataOfUser::updateContactdetailsOnPassword($editGender,$AccountKey);
        }
    }

    public function updateBirthDate  ($editBirthDate  ,$AccountKey)
    {
        if(CEditDataOfUser::checkIsEmpty($editBirthDate ) === false)
        {
            return CEditDataOfUser::updateContactdetailsOnPassword($editBirthDate,$AccountKey);
        }
    }
    

    /*
     * =============================================================================================
     */


//--------------------------------------------------------------------------------------------------------------------------------------------------

}