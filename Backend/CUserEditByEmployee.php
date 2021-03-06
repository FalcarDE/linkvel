<?php
//Created by @Hoang

$result = new CUserEditByEmployee();
$result->UpdateUserData();
class CUserEditByEmployee
{
        private  $InputGender;
        private  $InputFirstName;
        private  $InputMidName;
        private  $InputLastName;
        private  $InputBirthDate;
        private  $InputTel;
        private  $InputStandardUser;
        private  $InputAddress;
        private  $InputZipcode;
        private  $InputCountry;
        private  $InputUserName;
        private  $InputEmail;
        private  $InputPassword;
        private  $InputSuperUser;
        private  $AccountKey;

    
    function __construct()
    {
        $this->InputGender          =$_POST['InputGender'];
        $this->InputFirstName       =$_POST['InputFirstName'];
        $this->InputMidName         =$_POST['InputMidName'];
        $this->InputLastName        =$_POST['InputLastName'];
        $this->InputBirthDate       =$_POST['InputBirthDate'];
        $this->InputTel             =$_POST['InputTel'];
        $this->InputStandardUser    =$_POST['InputStandardUser'];
        $this->InputAddress         =$_POST['InputAddress'];
        $this->InputZipcode         =$_POST['InputPlz'];
        $this->InputCountry         =$_POST['InputCountry'];
        $this->InputUserName        =$_POST['InputUserName'];
        $this->InputEmail           =$_POST['InputEmail'];
        $this->InputPassword        =Password_hash(stripslashes((trim(($_POST['InputPassword'])))), PASSWORD_BCRYPT);
        $this->InputSuperUser       =$_POST['InputSuperUser'];
        $this->AccountKey           =$_POST['InputAccountKey'];
    }


    function printTest()
    {

        echo $this->InputGender;
        echo $this->InputFirstName;;
        echo $this->InputMidName;
        echo $this->InputLastName;
        echo $this->InputBirthDate;
        echo $this->InputTel;
        echo $this->InputStandardUser;
        echo $this->InputAddress;
        echo $this->InputZipcode;
        echo $this->InputCountry;
        echo $this->InputUserName;
        echo $this->InputEmail;
        echo $this->InputPassword;
        echo $this->InputSuperUser;
        echo $this->AccountKey;

    }
    function UpdateUserData()
    {
        include_once '../Backend/CEditDataOfUser.php';
        
        CEditDataOfUser::updateFirstName        ($this->InputFirstName,$this->AccountKey);       
        CEditDataOfUser::updateMidName          ($this->InputMidName,$this->AccountKey);       
        CEditDataOfUser::updateLastName         ($this->InputLastName,$this->AccountKey);       
        CEditDataOfUser::updateStreetAddress    ($this->InputAddress,$this->AccountKey);
        CEditDataOfUser::updateZipCode          ($this->InputZipcode,$this->AccountKey);       
        CEditDataOfUser::updateCountry          ($this->InputCountry,$this->AccountKey);       
        CEditDataOfUser::updateEmail            ($this->InputEmail,$this->AccountKey);       
        CEditDataOfUser::updatePassword         ($this->InputPassword,$this->AccountKey);

        /* ----------------------------------------------------------------------------- */

        CEditDataOfUser::updatePhoneNumber      ($this->InputTel,$this->AccountKey);
        CEditDataOfUser::updateStandardUserToken($this->InputStandardUser,$this->AccountKey);
        CEditDataOfUser::updateSuperUserToken   ($this->InputSuperUser,$this->AccountKey);
        CEditDataOfUser::updateGender           ($this->InputGender,$this->AccountKey);
        CEditDataOfUser::updateBirthDate        ($this->InputBirthDate,$this->AccountKey);

    }
    
    
    
}


