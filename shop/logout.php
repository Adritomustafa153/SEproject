<?php 
session_start();
session_destroy();
// $_SESSION = array();
// session_destroy();

header("location: login.php");
?>