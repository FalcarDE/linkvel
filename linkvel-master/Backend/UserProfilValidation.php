<?php
session_start();

if ($_SESSION["AccountKey"])
{
    header('Location: ../Frontend/UserProfilPage.php');
}
else
{
    header('Location: ../Frontend/FailedLogIn.php');
}
?>