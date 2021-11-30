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
     $item_type = $_POST['item_type'];
     $entry_date = $_POST['entry_date'];
     $room_no = $_POST['room_no'];
     $status_info = $_POST['status_info'];
     $sql = "UPDATE `lab_insert` SET `item_name`='$item_name',`item_type`='$item_type',`entry_date`='$entry_date', `romm_no`='$room_no', status_info`='$status_info' WHERE item_id='$id'";
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
    $sql1 = "SELECT * FROM lab_insert WHERE item_id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="update_lab.php" method="post" class="form-horizontal" role="form">

            <div class="form-group">
                <label for="item_name" class="col-sm-2 control-label">Entry Item</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="item_name" value="<?= $row['item_name']; ?>" >
                </div>
            </div>

            
            <div class="form-group">
                                <label class="col-sm-2 control-label">Type:</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="item_type">
                                        <option value="Keyboard">Keyboard</option>
                                        <option value="Mouse">Mouse</option>
                                        <option value="CPU">CPU</option>
                                        <option value="Monitor">Monitor</option>
                                    </select>
                                </div>
                            </div>

                           <div class="form-group">
                                <label for="entry_date" class="col-sm-2 control-label">Entry Date:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="entry_date" placeholder="Enter Date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="location" class="col-sm-2 control-label">Location:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="location" placeholder="Room No">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status:</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="status">
                                        <option value="Good">Good</option>
                                        <option value="Bad">Bad</option>
                                        
                                    </select>
                                </div>
                            </div>
            <center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id" value="<?=$id;?>" />
</form>
<br>
 <a href="lab_insert.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>

<?php
     }

?>
 </div>
 </div>
 </div>
 </div>
 </div>