<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];

	 $result = mysqli_query($conn,"DELETE FROM library WHERE book_id='$id'");
	 if($result){

	 header('Location: library.php');
	}else{
		echo "error!";
	 }
	}
?>