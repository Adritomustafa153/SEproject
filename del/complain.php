<?php

session_start();
include_once('db_connect.php');

$id = $_SESSION["uid"];
// echo "$id";
if(isset($_POST['submit'])){

  
    $feed = $_POST['feed'];



 
    $sql1 = "INSERT INTO `complain` (`id`, `val`) VALUES ('$id', '$feed');";
        $result = $conn->query($sql1);

        if ($result === TRUE) {
            header("location: showcom.php");
          
        }
        else{
        echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
       }





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style99.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Document</title>
</head>
<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Delivery Man</label>
      <ul>
        <li><a class="active" href="delivery_info.php">Delivery info</a></li>
        <li><a class="active" href="dhome.html">Home</a></li>
       
        <li><a href="mydelivery.php">My Delivery</a></li>
        <li><a href="dstatus.php">Delivery Status </a></li>
      
     
        <li ><a href="feedback.php">Feedback</a></li>
        <li ><a href="feedback.php">complain</a></li>
        <li><a href="logout.php">Logout</a></li>
        
      </ul>
    </nav>
    <br><br><br>
<div class="container">
  <form action="complain.php" method="post">

    <label for="subject">PLEASE GIVE YOUR COMPLAIN</label>
    <br>
    <textarea id="subject" name="feed" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">

  </form>
</div> 
</body>
</html>