<?php

	$id = $_GET["id"];




	require_once('db_connect.php');




	$query 	= "UPDATE order_data SET del_date='$' WHERE id = $id";

	


	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> f0 = $f0 <br> f1 = $f1";



	echo "<p><a href=read.php>READ all records</a>";

?>