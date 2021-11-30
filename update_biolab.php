<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">


<?php

if (isset($_POST['submit'])){

     $id = $_REQUEST['id'];

     $item_name = $_POST['item_name'];
     $item_num = $_POST['item_num'];
 
     $sql = "UPDATE `biolab_insert` SET `item_name`='$item_name',`item_num`='$item_num' WHERE item_id='$id')";
     $result = mysqli_query($conn,$sql);
     if($result){

        echo "<div class='alert alert-success'>";
        echo "<strong>Success!</strong>Successfully Updated";
        echo "</div>";
    }else{
        echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in update.Please try again.";
        echo "</div>";
    }
}


?>
<center><h3>Update Lab Entry</h3></center>

<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM biolab_insert WHERE item_id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="biolab_insert.php" method="post" class="form-horizontal" role="form">

            <div class="form-group">
                <label for="item_name" class="col-sm-2 control-label">Entry Item</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="item_name" value="<?= $row['item_name']; ?>" >
                </div>
            </div>

            
            <div class="form-group">
                <label for="item_num" class="col-sm-2 control-label">Entry Quantity</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="item_num" value="<?= $row['item_num']; ?>" >
                </div>
            </div>

                           
                          
                            
                            
            <center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id" value="<?=$id;?>" />
</form>
<br>
 <a href="biolab_insert.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>

<?php
     }

?>
 </div>
 </div>
 </div>
 </div>
 </div>