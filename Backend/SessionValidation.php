<?php
session_start();

if ($_SESSION["AccountKey"])
{
    header('Location: ../Frontend/profil.php');
}
else
{
    header('Location: ../Frontend/FailedLogIn.php');
}
?>