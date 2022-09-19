
<?php
	$id = $_GET["id"];

	$f0 = $_GET["f0"];
	// $d_date=$_GET["d_date"];
        $d_date = date('Y-m-d', strtotime($_GET["d_date"]));
	
// echo $d_date;
	require_once('db_connect.php');


	$sql 	= "UPDATE order_data SET o_progress='$f0 '  WHERE o_id=$id ";
mysqli_query( $conn, $sql );
$sql1 	= "UPDATE order_data SET  d_date='$d_date' WHERE o_id=$id ";
mysqli_query( $conn, $sql1 );

header("location: o_info.php");


?>