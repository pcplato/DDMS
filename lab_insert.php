<?php include("header.php");?>
<?php include('db_con.php');?>

<div class="container-fluid">
    <div class="row" id="wrapper">
        <?php require_once'menubar.php';?>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <center><h1>Laboratory Management</h1></center>
                    <hr>

                    <div class="col-sm-10 col-sm-offset-2">
                        <?php
                        if(isset($_POST['submit'])){
                            $item_name = $_POST['item_name'];
                            $item_type = $_POST['item_type'];
                            $entry_date = $_POST['entry_date'];
                            $room_no = $_POST['room_no'];
                            $status_info =$_POST['status_info'];

                            if($item_name!=NULL && $item_type!=NULL && $entry_date!=NULL && $room_no!=NULL && $status_info!=NULL ){

                                $sql = "INSERT INTO lab_insert (item_name,item_type,entry_date,room_no,status_info) VALUES ('$item_name','$item_type','$entry_date','$room_no','$status_info')";
                                $result = mysqli_query($conn,$sql);
                                if(!$result){
                                    echo "<div class='alert alert-success'>";
                                    echo "<strong>Error!</strong> in submisssion.Please try again.";
                                    echo "</div>";
                                }else{
                                    echo "<div class='alert alert-success'>";
                                    echo "<strong>Success!</strong> Insert Successfully";
                                    echo "</div>";
                                }
                            }
                        }
                        ?>

                        <form action="lab_insert.php" method="post" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="item_name" class="col-sm-2 control-label">Item Name:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="item_name" placeholder="Enter Item Name">
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
                                <label for="room_no" class="col-sm-2 control-label">Location:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="room_no" placeholder="Room No">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status:</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="status_info">
                                        <option value="Good">Good</option>
                                        <option value="Bad">Bad</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px; left:20px;">
                            <br>
                            <br>
                            <br>
                        </form>
                    </div>

                    <?php
                    $sql1 = "SELECT * FROM lab_insert";
                    $result1 = mysqli_query($conn,$sql1);
                    echo "<table class='table table-bordered'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Item Name</th>";
                    echo "<th>Type</th>";
                    echo "<th>Entry Date</th>";
                    echo "<th>Locaton</th>";
                    echo "<th>Status</th>";
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    echo "</thead>";

                    while($row1=mysqli_fetch_array($result1)){
                        echo "<tbody>";
                        echo "<tr class='success'>";
                        echo "<td>".$row1['item_id']."</td>";
                        echo "<td>".$row1['item_name']."</td>";
                        echo "<td>".$row1['item_type']."</td>";
                        echo "<td>".$row1['entry_date']."</td>";
                        echo "<td>".$row1['room_no']."</td>";
                        echo "<td>".$row1['status_info']."</td>";
                        echo '<td><a href="update_lab.php?id=' . $row1['item_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
                        echo '<a href="delete_lab.php?id=' . $row1['item_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
                        echo "</tr>";
                        echo "</tbody>";
                    }
                    echo "</table>";
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>