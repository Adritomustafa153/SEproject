<?php
?>
<?php

session_start();
include_once('db_connect.php');

$id = $_SESSION["uid"];
// echo "$id";
if(isset($_POST['picked'])){

  
    $orderid = $_POST['ordid'];



 
    $sql1 = "UPDATE order_data SET o_progress='pick' WHERE o_id=$orderid;";
        $result = $conn->query($sql1);

        if ($result === TRUE) {
           echo '<script>alert("Order Picked ")</script>';
          
        }
        else{
        echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
       }


$sql = "SELECT c_name,c_contact,d_location,o_id FROM `order_data` WHERE pickman_id = $id AND o_progress='pending';";
$result = mysqli_query($conn, $sql);


if(isset($_POST['picked2'])){

  $orderid = $_POST['ordid'];




  $sql1 = "UPDATE order_data SET o_progress='pick' WHERE o_id=$orderid;";
      $result = $conn->query($sql1);

      if ($result === TRUE) {
       header("location:holdstat.php");
        
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
  <title>My Delivery</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<style>
        .btns{
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 12px;
        transition-duration: 0.4s;
        background-color: #005EB8;
        color: white;
        border: 2px solid #005EB8; 
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        
    }
    .btns:hover {
  background-color: #87CEEB;
  border: 2px solid #005EB8; 
  
  
}
label{
	color: #005EB8;
	margin: 20px 0px;
	font-size: 24px;
    
}
input{
	height: 40px;
	border-radius: 8px;
	width: 300px;
	/* outline: none;
	border: none; */
	padding: 0px 10px;
}
</style></head>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Delivery Man</label>
    <ul>
    <li><a class="active" href="dhome.html">Home</a></li>
       
       <li><a href="mydelivery.php">My Delivery</a></li>
       <li><a href="dstatus.php">Delivery Status </a></li>
     
    
       <li><a href="feedback.php">Feedback</a></li>
       <li><a href="logout.php">Logout</a></li>
      
    </ul>
  </nav>
  <div class="container">
        <h3 class="text-center">My Delivery List</h3>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Order id</th>
                    <th> Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                </tr>
            </thead>
            
      <tbody>
      <?php
               if($result){
                while($row = $result->fetch_assoc()){
                  echo "<tr><td>" .$row['o_id']. "</td><td>" .$row['c_name'] .  "</td><td>" .$row['c_contact'] .  "</td><td>" .$row['d_location'] . "</td></tr>";
                }
              }

             
                ?>
       
      </tbody>
    </table>
    <form action="mydelivery.php" method="post">

<label for=""> Order ID</label>
<input type="text" name="ordid" placeholder="Order ID">
<button type="submit" class="btns" name="picked">Pick</button>
</form>

<form action="mydelivery.php" method="post">
<div>
<label for=""> Order ID</label>
<input type="text" name="ordid" placeholder="Order ID">
<button type="submit" class="btns" name="picked2">Hold</button>
</div>

        </form>
          
       
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>