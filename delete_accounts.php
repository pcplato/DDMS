<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];

	 $result = mysqli_query($conn,"DELETE FROM accounts WHERE accounts_id='$id'");
	 if($result){

	 header('Location:accounts_insert.php');
	}else{
		echo "error!";
	 }
	}
?>