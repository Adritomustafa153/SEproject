<?php

session_start();
include_once('db_connect.php');

$id = $_SESSION["uid"];
// echo "$id";
if (isset($_POST['submit'])) {


  $feed = $_POST['feedback'];




  $sql1 = "INSERT INTO `feedback` (`id`, `feed`) VALUES ('$id', '$feed');";
  $result = $conn->query($sql1);

  if ($result === TRUE) {
    header("location: showfeed.php");
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }
}

if (isset($_POST['submit2'])) {


  $rate = $_POST['rate'];




  $sql1 = "INSERT INTO `rate` (`id`, `val`) VALUES ('$id', '$rate');";
  $result = $conn->query($sql1);

  if ($result === TRUE) {
    header("location: feedback.php");
  } else {
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
      <li><a class="active" href="deli_info.php">Delivery info</a></li>
      <li><a class="active" href="dhome.html">Home</a></li>

      <li><a href="mydelivery.php">My Delivery</a></li>
      <li><a href="dstatus.php">Delivery Status </a></li>


      <li class="dropdown"><a href="feedback.php">Feedback</a></li>
      <li><a href="logout.php">Logout</a></li>

    </ul>
  </nav>







  <div class="container">
    <form action="feedback_insert.php" method="post">

      <div style="width: 400px;">
        <select name="rate">
          <option value="0">Rate:</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

        </select>
      </div>
      <label for="subject">PLEASE GIVE YOUR VALUABLE FEEDBACK</label>
      <br>
      <textarea id="subject" name="feedback" placeholder="Write something.." style="height:200px; margin-top:20px;"></textarea>

      <div style="text-align: center;">
        <input type="submit" name="submit" value="Submit">

      </div>

    </form>
  </div>
</body>

</html>