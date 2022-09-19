<?php
include("db_connect.php");


    $uemail = $_POST['email'];
    $password = $_POST['psw'];
    $Shop = $_POST['Shop']; 
    $Location = $_POST['Location'];
    $Area = $_POST['Area'];
    $contact = $_POST['contact'];




mysqli_query($conn,"INSERT INTO shop VALUES ('','$Shop','$contact','$uemail','$Location','$Area','$password' )") 
or die("Can not execute query");
header("location: login.php");
?>