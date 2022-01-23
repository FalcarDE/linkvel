<?php
//created by @Hoang
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header('Location: ../Frontend/LandingPage.php');
exit();
?>
