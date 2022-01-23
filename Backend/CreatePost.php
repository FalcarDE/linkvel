<!--Created by @AntoniaGeschke-->

<?php
session_start();

include_once "../Backend/CCreatePostValidation.php";
include_once "../Backend/CServerConnection.php";
include_once "../Backend/CUserDataLoading.php";

/*Server-connection*/
$ServerConnection  = new CServerConnection("localhost","root", "");
$pdoServer = $ServerConnection::connectServer();



//====== Fetches values from frontend (create_post.php)=======================================

$PictureFile = $_FILES["filename"];
$Heading = $_POST['heading'];
$Hashtags = $_POST ['hashtags'];
$PostTextfile = $_POST ['post_textfile'];
$Longitude = $_POST['longitude'];
$Latitude = $_POST['latitude'];


//======== Fetches AccountKey from the current session ===================================

$AccountKey = implode($_SESSION['AccountKey']);



//======== Calls function validateAll(..:) from 'CCreatePostValidation in order to check entries for accuracy===================================
if(CCreatePostValidation::validateAll($PictureFile['name'], $Heading, $Hashtags, $PostTextfile, $Longitude, $Latitude) == true)
{


// === Sets timestamp ==================

date_default_timezone_set("MET");
$DateTime = date("YmdHis", time());

$Username =  CUserDataLoading::getUserName($AccountKey);



// ===== If directories not already exists: Creates UserMedia directory and subdirectory 'Username' in order to safe the picture path ====

if (!is_dir('../UserMedia'))
{
    mkdir('../UserMedia');
}
if(!is_dir('../UserMedia/'.$Username))
{
    mkdir('../UserMedia/'.$Username);
}


//===== Moves uploaded file and saves the new image path in directory UserMedia/Username ======

if(str_ends_with($PictureFile['tmp_name'],'.png')) {

    $NewImagePath = '../UserMedia/'.$Username.'/'.$Username.$DateTime.'.png';
    move_uploaded_file($PictureFile['tmp_name'], $NewImagePath);
}
else{

    $NewImagePath = '../UserMedia/'.$Username.'/'.$Username.$DateTime.'.jpg';
    move_uploaded_file($PictureFile['tmp_name'], $NewImagePath);

}



// ==== SQL-Statement: Saves new post in the database ============

    $SqlStatement= $pdoServer->prepare("INSERT INTO linkvel.post (SuperUserRefKey, PostTextFile, Headline, PictureFile, Post_Date_Time, Hashtags, MapLadiutes, MapLongitude)
                                         VALUES (:superUserRefKey, :textfile, :heading, :pictureFile, :postDateTime, :hashtags, :laditude, :longitude )");


    $SqlStatement->bindValue(':superUserRefKey', $AccountKey);
    $SqlStatement->bindValue(':textfile', $PostTextfile);
    $SqlStatement->bindValue(':heading', $Heading);
    $SqlStatement->bindValue(':pictureFile', $NewImagePath);
    $SqlStatement->bindValue(':postDateTime', $DateTime);
    $SqlStatement->bindValue(':hashtags', $Hashtags);
    $SqlStatement->bindValue(':laditude', $Latitude);
    $SqlStatement->bindValue(':longitude', $Longitude);

    $SqlStatement->execute();



//========= directs user to 'SuccessfullUpload' page ============

    header('Location: ../Frontend/SuccessfullUpload.php');
    exit();
}
else {

//========= directs user to 'failedUpload' page ============

    header('Location: ../Frontend/failedUpload.php');
    exit();
}


