<?php
session_start();
include_once('db_connect.php');

$id = $_SESSION["uid"];
// echo "$id";
if (isset($_POST['submit'])) {


  $feed = $_POST['feedback'];
  $rate = $_POST['rate'];




  $sql1 = "INSERT INTO `feedback` (`id`, `feed`, `rating`) VALUES ('$id', '$feed', $rate);";
  $result = $conn->query($sql1);

  if ($result === TRUE) {
    header("location: showfeed.php");
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }
}





?>