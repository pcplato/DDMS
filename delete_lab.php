<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];

	 $result = mysqli_query($conn,"DELETE FROM lab_insert WHERE item_id='$id'");
	 if($result){

	 header('Location:lab_insert.php');
	}else{
		echo "error!";
	 }
	}
?>