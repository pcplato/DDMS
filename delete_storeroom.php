<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];

	 $result = mysqli_query($conn,"DELETE FROM store WHERE product_id='$id'");
	 if($result){

	 header('Location: storeroom.php');
	}else{
		echo "error!";
	 }
	}
?>