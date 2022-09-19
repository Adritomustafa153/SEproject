<?php
  session_start();
  include_once('db_connect.php');
  $id = $_SESSION["uid"];
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
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


      <li class="dropdown"><a href="feedback.php">Feedback</a></li>
      <li><a href="logout.php">Logout</a></li>

    </ul>
  </nav>
  </head>
  <body>
    <br><br><br>
    <h2>ALL THE FEEDBACK</h2>
    <br>


    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>name</th>
          <th>contact</th>
          <th>location</th>
        </tr>
      </thead>
      <?php
      $sql = "SELECT * FROM `delivery_man`";
      $result = mysqli_query($conn, $sql);
      
      while ($row = $result->fetch_assoc()) {
        echo "
        <tbody>
          <tr>
            <td>" . $row['u_id'] . "</td>
            <td>" . $row['dm_name'] . "</td>
            <td>" . $row['dm_contact'] . "</td>
            <td>" . $row['loactio'] . "</td>
          </tr>
        </tbody>";
      }
      ?>
    </table>
  </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html>



<?php


// echo "$id";




?>