<?php
session_start();

if ($_SESSION["AccountKey"])
{
    header('Location: ../Frontend/UserProfilePage.php');
}
else
{
    header('Location: ../Frontend/FailedLogIn.php');
}
?>