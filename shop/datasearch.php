<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
	.first{
		margin-left:80%;
	}
    input:hover
{
    border: 2px solid red;
    background-color: gray;
	float: 2px;
	cursor:pointer;
    margin-top: 5px;
}

   </style>


</head>


<div class="first" >
    <form class="get" action="">
       
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<h2 style="margin-left:20px;margin-buttom:20px;">Search <span class="badge bg-primary"><?php echo"Data"?></span></h2>
<!-- <p> Today's Date : <?php echo "$date"?> Time : <?php echo "$time"?></p> -->
<table class="table table-border">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Contact</th>
      <!-- <th>Running Order</th> -->
      
      
     
    </tr>
  </thead>
  <tbody>
    <?php
    $conn = mysqli_connect('localhost','root','','dhuye_daw');
    if($conn){
      echo "Connection Successful.";
    }
    else{
      echo"Connection error";
    }
	$id = $_GET["search"];
    $sql = "SELECT d_id,dm_name,dm_contact FROM delivery_man where $id=d_id ;";
    $result = $conn->query($sql);

   
    if($result){
      while($row = $result->fetch_assoc()){
        echo "<tr><td>" .$row['d_id'] . "</td><td>".$row['dm_name'] . "</td><td>" .$row['dm_contact'] .  "</td></tr>";
      }
    }



 
      ?>
   
  </tbody>
</table>


<section class="w3-container w3-center w3-content" style="max-width:600px">
<a style="margin-top:1%;background-color:gray" href="./o_info.php">Go to Shopper page</a>

    <h2 class="w3-wide">Dhuway Daw</h2>
    <p class="w3-opacity">Make Your LIfe easy</p>
  </section>
</html>



