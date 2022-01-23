<?php
session_start();
if ($_SESSION["AccountKey"])
{
    header('Location: ../Frontend/UserProfileEdit.php');
}
else
{
    header('Location: ../Frontend/FailedLogIn.php');
}
?>
