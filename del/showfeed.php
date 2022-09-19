
<?php

session_start();
include_once('db_connect.php');

$id = $_SESSION["uid"];
// echo "$id";



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
      
     
        <li class="dropdown" ><a href="feedback.php">Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>
        
      </ul>
    </nav>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}
</style>
</head>
<body>
<br><br><br>


     

<h2>ALL THE FEEDBACK</h2>
<br>

<table class="table table-dark table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>feedback</th>
          <th>rating</th>
        </tr>
      </thead>
      <?php
      $sql = "SELECT * FROM `feedback`";
      $result = mysqli_query($conn, $sql);
      
      while ($row = $result->fetch_assoc()) {
        echo "
        <tbody>
          <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['feed'] . "</td>
            <td>" . $row['rating'] . "</td>
          </tr>
        </tbody>";
      }
      ?>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html> 








